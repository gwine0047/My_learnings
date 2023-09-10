#include <stdio.h>

int main()
{
    int size, nums, i, j;

    printf("Enter your array size: ");
    scanf("%d", &size);

    int num[size];
    for (i = 0; i < size; i++)
    {
        printf("Enter [%d] number: ", i + 1);
        scanf("%d", &nums);

        num[i] = nums;
    }

    for (j = 0; j < size; j++)
    {
        printf("Element[%d] = %d\n", j, num[j]);
    }
    return (0);
}