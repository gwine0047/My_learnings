#include "list.h"

void InsertFirst(dlist **head, int key, int data)
{
    dlist *new_node;
    new_node = (dlist *)malloc(sizeof(dlist));
    if (new_node == NULL)
    {
        perror("Memory allocation for new node");
        return;
    }
    new_node->data = data;
    new_node->key = key;
    /*Make next point to head and prev to NULL*/
    new_node->next = (*head);
    new_node->prev = NULL;

    /*change prev of head to new_node*/
    if ((*head) != NULL)
    {
        (*head)->prev = new_node;
    }
    (*head) = new_node;
}

void InsertAfter(dlist *prev_node, int key, int data)
{
    dlist *new_node;
    /*check if the previous node is NULL*/
    if (prev_node == NULL)
    {
        printf("The previous node cannot be NULL");
        return;
    }
    new_node = (dlist *)malloc(sizeof(dlist));
    if (new_node == NULL)
    {
        perror("New memory failure from InsertAfter()");
        return;
    }
    new_node->key = key;
    new_node->data = data;

    /*Make the new node point to what the prev node points*/
    new_node->next = prev_node->next;
    /*put the new node after the prev*/
    prev_node->next = new_node;
    new_node->prev = prev_node;

    if (new_node->next != NULL)
    {
        new_node->next->prev = new_node;
    }
}

void append(dlist **head, int key, int data)
{
    dlist *new_node, *last = *head;

    new_node = (dlist *)malloc(sizeof(dlist));
    if (new_node == NULL)
    {
        perror("New memory failure from InsertAfter()");
        return;
    }
    new_node->key = key;
    new_node->data = data;
    /*New_node will be put at the end, so make it point to NULL*/
    new_node->next = NULL;
    /*If the list is empty, new node should be made head*/
    if (*head == NULL)
    {
        new_node->prev = NULL;
        *head = new_node;
        return;
    }
    /*If head is not empty, traverse to the last node*/
    while (last->next != NULL)
    {
        last = last->next;
    }
    last->next = new_node;
    new_node->prev = last;

    return;
}   

void PrintList(dlist *node)
{
    dlist *last = NULL;

    while (node->prev != NULL)
    {
        node = node->prev;
    }
    printf("\nIterating forward\n");
    while (node != NULL)
    {
        printf("[");
        printf("%d, %d", node->key, node->data);
        last = node;
        node = node->next;
        printf("]");
    }
    //printf("%p", node->next);
    printf("\nIterating backward\n");
    while (last != NULL)
    {
        printf("[");
        printf("%d, %d", last->key, last->data);
        last = last->prev;
        printf("]");
    }
    printf("\n");
}