#ifndef _LIST_H
#define _LIST_H

#include <stdio.h>
#include <stdlib.h>

typedef struct Node
{
    int data;
    int key;
    struct Node *next;
    struct Node *prev;
}dlist;
void PrintList(dlist *node);
void InsertFirst(dlist **head, int key, int data);
void append(dlist **head, int key, int data);
void InsertAfter(dlist *prev_node, int key, int data);

#endif