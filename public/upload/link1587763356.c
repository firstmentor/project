#include<stdio.h>
struct complex
{
    float real;
    float imag;

}complex
 sum(complex n1,complex n2);
int main()
{
    complex n1,n2,res,*p1,*p2,*p3;
    printf("enter first complex number ");
    printf("enter real and imaginary part");
    scanf("%f%f",&n1.real,&n1.imag);
    printf("enter second complex number ");
    printf("enter real and imaginary part");
    scanf("%f%f",&n2.real,&n2.imag);
    p1=&n1;
    p2=&n2;
    p3=&res;
    res=sum(&n1,&n2,p1,p2)
    printf("sum=%.1f+%.1fi",res.real,res.imag);

}
comples sum(complex n1,complex n2,*p1,*p2,*p3)
{
    complex temp;
    *(p3+temp.real)=*(p1+n1.real)+*(p1+n1.imag);
   *(p3+temp.real)=*(p2+n2.real)+*(p2+n2.imag);
   return(temp);
}
