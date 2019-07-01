#include <stdlib.h>
#include <stdio.h>
struct sinhvien{
	char *hoten;
	int ns;
	double dtb;
};
int main(int argc, const char * argv[] ) {
	struct sinhvien A;
	struct sinhvien *pA;
	printf("Cho biet ho ten sinh vien: ");
	A.hoten = (char *) malloc(50 * sizeof(char));
	gets(A.hoten);
	printf("cho biet nam sinh: ");
	scanf("%d", &A.ns);
	printf("diem trung binh: ");
	scanf("%lf", &A.dtb);
	printf("\nthong tin ve sinhvien A: ");
	printf("\nHo ten: %s", A.hoten);
	printf("\nNam sinh: %d",A.ns);
	printf("\nDiem trung binh: %lf", A.dtb);
	pA=&A;
	printf("\n---------\n");
	printf("\nThong tin ve sinh vien A:  ");
	printf("\nHo ten: %s", pA->hoten);
	printf("\nNam sinh: %d", pA->ns);
	printf("\nDiem trung binh: %lf", pA->dtb);
return 0;	
}

