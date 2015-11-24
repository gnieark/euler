#include<stdio.h>
#include <stdlib.h>
#include <math.h>

int main(int argc, char *argv[])
{
    if ( argc != 2 ){
        printf( "usage: ./getPrimeNumber [integer]\n");
        return 0;
    }
    else{
        
        int limit= atoi(argv[1]);
        int *primes, i, isPrime,count=2, number=3;
        primes=(int*)malloc(limit*sizeof(int));
        primes[0]=2;
        primes[1]=3;

        while( count <= limit){
            isPrime=1;
            for (i=0; ((primes[i] <= sqrt(number)) && (i < count)) ; i=i+1){
             if(number%primes[i] == 0){
                 isPrime=0;
                 break;
             }
            }
            if(isPrime){
                count++;
                primes[count -1]=number;
            }
            number+=2;
        }
        printf("%d\n",primes[count -1]);
    }
    return 0;
}