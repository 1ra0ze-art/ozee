#include<stdio.h>
int main(){
	int num1,num2;
	float div;
	int mod;
	char op;
	printf("Enter two operands separated  by a comma: ");
	scanf("%d, %d", &num1,&num2);
	printf("Enter the operator(+,-,%,*,/):");
	scanf(" %c", &op);
	switch(op){
		case '+':
			printf("Result = %d\n",num1+num2);
			break;
		case '-':
			printf("Result = %d\n",num1-num2);
			break;
		case '*':
			printf("Result = %d\n",num1*num2);
			break;
		case '/':
			if(num2!=0){
				div=(float)num1/num2;
				printf("Result = %.1f\n",div);
			}
			else{
				printf("Error! Division isn't possible.\n");
			}
			break;
		case '%':
			if(num2!=0){
				mod=num1%num2;
			    printf("%d %% %d=%d",num1,num2,mod);
		}
		    else{
			    printf("division not possible");
		}
			    break;
			
		default:
			printf("invalid operator.\n");
	}
	return 0;
}
