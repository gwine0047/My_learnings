#ifndef _LIST_H
#define _LIST_H

#include <stdio.h>
#include <string.h>
#include <ctype.h>
#include <math.h>
#include <stdlib.h>

//sub linked list structure
typedef struct Linkedlist
{
    int data;
    struct Linkedlist *address;
}Linkedlist;

//Parent linked list structure
typedef struct P_Linkedlist
{
    int data;
    struct Linkedlist *address1;
    struct P_Linkedlist *address2;
}P_Linkedlist;
#endif