#include <stdio.h>

int main()
{
    int a[2][2], b[2][2], sum[2][2], i, j;

    printf("\t\t\tADDITION OF 2X2 MATRIX USING POINTERS\n");
    printf("\nEnter elements of the first matrix:\n");

    for (i = 0; i <= 1; i++)
    {
        for (j = 0; j <= 1; j++)
        {
            scanf("%d", &*(*(a + i) + j));
        }
    }

    printf("\nEnter elements of the second matrix:\n");

    for (i = 0; i <= 1; i++)
    {
        for (j = 0; j <= 1; j++)
        {
            scanf("%d", &*(*(b + i) + j));
        }
    }

    for (i = 0; i <= 1; i++)
    {
        for (j = 0; j <= 1; j++)
        {
            *(*(sum + i) + j) =  *(*(a + i) + j) + *(*(b + i) + j);
        }
    }
    printf("\nSum of two matrices: \n");
    for (i = 0; i <= 1; i++)
    {
        for (j = 0; j <= 1; j++)
        {
            printf("%d  ", *(*(sum + i) + j));
            if (j == 1)
            {
                printf("\n\n");
            }
        }
    }
    return (0);
}