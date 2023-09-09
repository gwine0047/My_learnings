#include "list.h"
clist *head = NULL;

int main()
{
    int B[] = {1,2,3,4,5,6};
    char pos[] = "First,Second,Third,Fourth,Fifth,Sixth";
    int n = 6;

    create (B, pos, n);

    InsertAfter(head, 6, 7, "seventh");
    
    Display(head);

    int length = Length(head);
    printf("The list is %d long\n\n", length);

    return (0);
}