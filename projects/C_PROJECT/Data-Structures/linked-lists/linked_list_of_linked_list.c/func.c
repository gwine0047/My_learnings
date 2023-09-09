#include "list.h"
/*Appending in sub linked list*/
void append(P_Linkedlist *h)
{
    P_Linkedlist *head;
    int value;
    Linkedlist *temp;
    Linkedlist *current;

    printf("Enter the value to append in the sub linked list: ");
    scanf("%d", %value);

    while (head->address2 != NULL)
    {
        head = head->address2;
    }
    /*If the parent list has no list in it, then the new list is the first*/
    if (head->address1 == NULL)
    {
        temp = (Linkedlist *)malloc(sizeof(Linkedlist));
        temp->address = NULL;
        temp->data = value;
        head->address1 = temp;
    }
    /*If the parent is already pointing to a list, current iterates to the end of the parent list and creates the new list*/
    else
    {
        current = head->address1;
        while (current->address != NULL)
        {
            current = current->address;
        }
        current->address = (Linkedlist *)malloc(sizeof(Linkedlist));
        current->address->address = NULL;
        current->address->data = value;
    }
}