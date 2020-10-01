#include<stdio.h>
#include<conio.h>
int main()
{
int skt;
int pbt;
int kht;
int array[5]={11,12,33,43,21};
printf("welcome to my progrram\n");
printf("Enter the location you want to update\n");
scanf("%d",&pbt);
pbt--;
printf("Enter the number\n");
scanf("%d\n",&kht);
for(skt=0;skt<5;skt++)
{
array[pbt]=kht;
printf("%d\n",array[skt]);
}
getch();
return 0;
}

