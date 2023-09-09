#include "link.h"
int PrintList()
{
    list *ptr = head;
    /* display list */
    printf("\n[ ");

    /*Iterating from the beginning and printing keys and data*/
    while (ptr)
    {
        printf("(%d,%d) ", ptr->key, ptr->data);
        ptr = ptr->next;
    }
    printf(" ]\n");
}

int length()
{
    list *temp;
    int len = 0;

    for (temp = head; temp != NULL; temp = temp->next)
    {
        len++;
    }
    return (len);
}

struct node* find(int key)
{
    /*Start from the first link*/
    list *current = head;

    /*if the list is empty*/
    if (head == NULL)
        return (NULL);
    /*Navigate through the list*/
    int count = 1;
    while (current != NULL)
    {
        printf("Key[%d] = %d, data[%d] = %d\n", count, current->key, count, current->data);
        count++;
        if (current->key == key)
        {
            printf("Key = %d, data = %d\n", current->key, current->data);
            return (current);
        }
        current = current->next;
    }
    return (NULL);
}

void sort ()
{
    int a, b, c, tempKey, tempData, size;
    list *current;
    list *next;

    size = length();
    c = size;

    for (a = 0; a < size - 1; a++, c--)
    {
        current =  head;
        next = head->next;

        for (b = 1; b < c; b++)
        {
            if (current->data > next->data)
            {
                tempData = current->data;
                current->data = next->data;
                next->data = tempData;

                tempKey = current->key;
                current->key = next->key;
                next->key = tempKey;
            }
        }
    }
}

void reverse(struct node **head_ref)
{
    list *prev  = NULL;
    list *current = *head_ref;
    list *next;

    while (current != NULL)
    {
        /*store the next link */
        next = current->next;
        /*reverse current->next to point to prev node (which will be updated to the current node)*/
        current->next = prev;
        /*prev is updated to point to current node */
        prev = current;
        /*current node now updated to next node, so the loop can continue to the next node*/
        current = next;
    }
    /*
    next is used to remember the next node in the original list.
    It changes the current node's pointer to point to the prev node, effectively reversing the direction of the pointer.
    It then moves prev to current and current to next to continue to the next node.
    */
    *head_ref = prev;
}