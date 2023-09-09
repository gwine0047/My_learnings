#ifndef _LINK_H
#define _LINK_H

#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <stdbool.h>

typedef struct node
{
    int data;
    int key;
    struct node *next;
}list;

extern list *head;
extern list *temp;

int PrintList();
void insertFirst(int key, int data);
void reverse(struct node **head_ref);
void sort ();
struct node* find(int key);

int length();
struct node* DeleteFirst();
bool isEmpty();
struct node* DeleteKey(int key);
#endif