#include "list.h"

int main()
{
    dlist *head = NULL;

    /*put this at the end*/
    append(&head, 10, 1000);
    /*Put this as first*/
    InsertFirst(&head, 2, 200);
    /*Put this as first*/
    InsertFirst(&head, 1, 100);

    InsertAfter(head->next, 3, 300);

    getchar();
    printf ("created DLL is : ");
    PrintList(head);
}