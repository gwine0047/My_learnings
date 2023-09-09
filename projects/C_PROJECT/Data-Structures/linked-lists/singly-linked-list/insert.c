#include "link.h"
void insertFirst(int key, int data)
{
    list *new = malloc(sizeof(struct node));

    new->key = key;
    new->data = data;
    /*point it to the first node*/
    new->next = head;

    /*point first to new first node*/
    head = new;
}