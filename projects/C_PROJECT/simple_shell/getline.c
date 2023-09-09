#include "stdio.h"

int main()
{
    char *line = NULL;
    size_t count = 0;

    while (1)
    {
        getline(&line, &count,stdin);
    }
    return (0);
}