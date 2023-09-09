#ifndef _LIST_H
#define _LIST_H

#include <stdio.h>
#include <stdlib.h>
#include <string.h>
typedef struct Node
{
    int data;
    char *pos;
    struct Node *next;
    struct Node *prev;
}clist;
extern clist *head;
void create(int B[], char pos[], int n);
void Display(clist *node);
int Length(clist *node);
void InsertAfter(clist *node, int index, int data, char pos[]);
#endif