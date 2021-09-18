#include <iostream>
#include <stdlib.h>
#include <string.h>
#include <ctype.h>
using namespace std;

int main()
{
    FILE *fp ;
    char data[100] ;
    fp = fopen( "Text.txt", "r" ) ;
    char path[100];
    int i, len, index, isUnique;
    char words[1000][50];
    char word[50];
    int count1=0 ;
    //int num2 = 0;
    char c;
    int  count[1000];




if ( fp == NULL )
{
    cout<< "Could not open file test.txt"  ;
    return 1;
}

    //fclose(fp) ;


while( fgets ( data, 50, fp ) != NULL )

    cout<< data;
    cout<< endl;



    for (i=0; i<index; i++)
    {

        cout<< words[i] <<endl;

    }

    for (c = getc(fp); c != EOF; c = getc(fp))
        {
            if (c == '\n')
            count1 = count1 + 1;
        }



    while( fgets ( data, 50, fp ) != NULL )
{
       cout<< data  ;

    fclose(fp);
    cout<<"Total Line: " << count1;
}

return 0;

}
