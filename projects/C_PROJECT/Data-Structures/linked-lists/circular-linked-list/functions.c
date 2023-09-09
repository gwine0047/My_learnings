#include "list.h"

void create(int B[], char pos[], int n)
{
    int i;
    clist *node, *last;
    head = (clist *)malloc(sizeof(clist));

    if (head == NULL)
    {
        printf("Could allocate memory for clist\n");
        return;
    }
    char *token = strtok(pos, ",");
    head->data = B[0];
    head->pos = token;
    head->next = head;
    last = head;

    for (i = 1; i < n; i++)
    {
        node = (clist *)malloc(sizeof(clist));
        node->data = B[i];
        token = strtok(NULL, ",");
        node->pos = token;
        node->next = last->next;
        last->next = node;
        last = node;
    }
}

void Display(clist *node)
{
    do
    {
        printf("[");
        printf("%s, %d ", node->pos, node->data);
        node = node->next;
        printf("] ");
    }
    while (node != head);
    printf("\n");
}


int Length(clist *node)
{
    int len  = 0;

    do
    {
        len++;
        node = node->next;
    } while (node != head);
    return (len);
}

void InsertAfter(clist *node, int index, int data, char pos[])/*Insert new element after the given node*/
{
    clist *temp;
    int i;

    if (index < 0 || index > Length(node))
    {
        printf("Can't insert. Invalid index");
        return;
    }
    if (index == 0)
    {
        temp = malloc(sizeof(clist));
        temp->data = data;

        if (head == NULL)
        {
            head = temp;
            head->next = head;
        }
        else
        {
            while (node->next != head)node = node->next;
            node->next = temp;
            temp->next = head;
            head = temp;
        }
    }
    else
    {
        for (i = 0; i < index - 1; i++)node = node->next;
        temp = malloc(sizeof(clist));
        temp->data = data;
        temp->pos = pos;
        temp->next = node->next;
        node->next = temp;
    }
}