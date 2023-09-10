#include <stdio.h>

int main()
{
    int n, i = 0, s, t;

    printf("\nACCESSING THE LARGEST AND SMALLEST ELEMENT OF AN ARRAY\n");

    printf("What is the size of your array\n?");
    scanf("%d", &n);
    
    int arr[n];
    for (;i <= n - 1; i++)
    {
        printf("Enter an element: ");
        scanf("%d", &arr[i]);
    }
    s = t = arr[0];
    for (i = 0; i <= n - 1; i++)
    {
        if (arr[i] > t)
            t = arr[i];
        else if (arr[i] < s)
            s = arr[i];
    }
    printf("\nThe array is : [");
    for (i = 0; i <= n - 1; i++)
    {
        printf("%d, ", arr[i]);
    }
    printf("] ");
    printf("\n\nThe largest element is :%d", t);
    printf("\n\nThe smallest element is :%d\n", s);
}