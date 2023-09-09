#include "link.h"
list *temp = NULL;
list *head = NULL;
list *FoundLink;

int main(void)
{
   insertFirst(1,10);
   insertFirst(2,20);
   insertFirst(3,30);
   insertFirst(4,1);
   insertFirst(5,40);
   insertFirst(6,56); 

   printf("Original List: ");

   PrintList();
   while (!isEmpty())
   {
      temp = DeleteFirst();
      printf("\nDeleted value: ");
      printf("%d, %d", temp->key, temp->data);
   }
   printf("\n");

   printf("\nList after deleting all items: ");
   PrintList();

   insertFirst(1,11);
   insertFirst(2,22);
   insertFirst(3,33);
   insertFirst(4,44);
   insertFirst(5,55);
   insertFirst(6,66);

   printf("\nRe-made list: ");
   PrintList();
   printf("\n");

   FoundLink = find(4);

   if (FoundLink != NULL)
   {
      printf("Element found: ");
      printf("(%d, %d)", FoundLink->key, FoundLink->data);
      printf("\n");
   }
   else
   {
      printf("Element not found.");
   }
   printf("\n");
   sort();

   printf("List after sorting: ");
   PrintList();

   reverse(&head);
   printf("\nList after reversing the data: ");
   PrintList();
}
