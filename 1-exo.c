#include <stdio.h>
// exo-1 en c
int main() {
    float prix1, prix2, prix3;
    
    printf("Entrez le prix du premier produit: ");
    scanf("%f", &prix1);
    printf("Entrez le prix du deuxième produit: ");
    scanf("%f", &prix2);
    printf("Entrez le prix du troisième produit: ");
    scanf("%f", &prix3);
    
    float prix_max = prix1;
    
    if (prix2 > prix_max) {
        prix_max = prix2;
    }
    if (prix3 > prix_max) {
        prix_max = prix3;
    }
    
    printf("Le prix le plus élevé est: %.2f\n", prix_max);
    return 0;
}
