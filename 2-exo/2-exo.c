#include <stdio.h>

int main() {
    int N, somme = 0;
    
    printf("Entrez le nombre de participants: ");
    scanf("%d", &N);
    
    for (int i = 1; i <= N; i++) {
        somme += i;
    }
    
    printf("Le budget total estimé est: %d\n", somme);
    return 0;
}
