#include <stdio.h>
#include <pthread.h>

void* ThreadFunc(void* arg)
{
	    int thread_id = *((int*)arg);
	        printf("Hello there, this is thread #%d\n", thread_id);
		    pthread_exit(NULL);
}

int main()
{
	    pthread_t thread23, thread77, thread560;
	        int thread23_id = 23;
		    int thread77_id = 77;
		        int thread560_id = 560;

			    pthread_create(&thread23, NULL, ThreadFunc, &thread23_id);
			        pthread_create(&thread77, NULL, ThreadFunc, &thread77_id);
				    pthread_create(&thread560, NULL, ThreadFunc, &thread560_id);

				        pthread_join(thread77, NULL);
					    pthread_join(thread23, NULL);
					        pthread_join(thread560, NULL);

						    return 0;
}

