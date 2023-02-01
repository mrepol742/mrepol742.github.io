class Node:
    def __init__(self, value=None, next=None, prev=None):
        self.value = value
        self.next = next
        self.prev = prev

class LinkedList:
    def _init__(self, type):
        self.head = None
        self.tail = None
        self.type = type_

    def isEmpty(self):
        return self.head is None

    def toString(self):
        current = self.head
        values = []
        while current:
            values.append(current.value)
            current = current.next
        return " -> ".join(str(i) for i in values)

    def find(self, value):
        current = self.head
        while current:
            if current.value == value:
                return current
            current = current.next
        return None

    def add(self, value):
        new_node = Node(value)
        if self.isEmpty():
            self.head = self.tail = new_node
            if self.type == "circular":
                self.tail.next = self.head
        else:
            if self.type == "singly":
                current = self.head
                while current.next:
                    current = current.next
                current.next = new_node
            elif self.type == "doubly":
                new_node.prev = self.tail
                self.tail.next = new_node
                self.tail = new_node
            elif self.type == "circular":
                new_node.prev = self.tail
                self.tail.next = new_node
                self.tail = new_node
                self.tail.next = self.head

    def delete(self, value):
        if self.isEmpty():
            return None
        if self.head.value == value:
            if self.type == "singly":
                self.head = self.head.next
            elif self.type == "doubly":
                self.head = self.head.next
                if self.head:
                    self.head.prev = None
            elif self.type == "circular":
                self.head = self.head.next
                if self.head:
                    self.head.prev = self.tail
                    self.tail.next = self.head
            return
        current = self.head
        while current.next:
            if current.next.value == value:
                if self.type == "singly":
                    current.next = current.next.next
                elif self.type == "doubly":
                    current.next = current.next.next
                    if current.next:
                        current.next.prev = current
                elif self.type == "circular":
                    current.next = current.next.next
                    if current.next:
                        current.next.prev = current
                return
            current = current.next
    def display(self):
        if self.isEmpty():
            print("Linked list is empty.")
            return
        current=self.head

        while current:
            print(current.value)
            current = current.next

def main():

    print("Choices:\n\n1. Singly\n2. Doubly\n3. Circular\n")
    type_ = int(input("Enter the type of linked List: "))
    ll = LinkedList(type_)


    while True:
        print("\nSelect Operation: ")
        print("\n1. New\n2. IsEmpty\n3. toString\n4. Find\n5. Add\n6. Delete\n7. Display\n8. Exit\n")
        choice = int(input("Enter choice: "))

        if choice == 1:
            value = input("Enter value: ")
            ll = LinkedList(type_)
            ll.add(value)
            print("Linked list created.")

        elif choice == 2:
            if ll.isEmpty():
                print("Linked list is empty.")

            else:
                print("Linked list is not empty.")


        elif choice == 3:
            print(ll.toString())

        elif choice == 4:
            value = input("Enter value to find: ")
            result = ll.find(value)
            if result:
                print(f"Value {value} found.")

            else:
                print(f"Value {value} not found.")

        elif choice == 5:
            value = input("Enter value to add: ")
            ll.add(value)
            print(f"Value {value} added.")

        elif choice == 6:
            value = input("Enter value to delete: ")
            ll.delete(value)
            print(f"Value {value} deleted.")
        elif choice == 7:
            ll.display()

        elif choice == 8:
            break

        else:
            print("Invalid choice.")


if _name_ == "_main_":
    main()