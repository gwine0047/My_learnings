#include "link.h"
struct node* DeleteFirst()
{
    list *temp = head;

    head = head->next;
    return temp;
}

bool isEmpty()
{
    return head == NULL;
}

/*Delete a link with a key*/
struct node* DeleteKey(int key)
{
    list *current = head;
    list *prev = NULL;

    if (head == NULL)
        return (NULL);

    while (current->key != key)
    {
        if (current->next == NULL)
            return (NULL);
        /*store reference to the current link*/
        prev = current;
        /*move to the next node*/
        current = current->next;
    }
    /*if match found, update link*/
    if (current == head)
        head = head->next;
    /*By-pass the link to be deleted*/
    prev->next = current->next;

    return (current);
}