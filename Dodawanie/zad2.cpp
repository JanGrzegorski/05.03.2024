#include <iostream>
#include "Dodawanie.h"
#include "Odejmowanie.h"
using namespace std;

int main()
{
	setlocale(LC_ALL, "");
	float l1, l2;
	cout << "Podaj liczbe1 ="; cin >> l1;
	cout << "Podaj liczbe1 ="; cin >> l2;
	Dodawanie dodawanie = Dodawanie(l1, l2);
	cout << dodawanie.oblicz() << endl;

	cout << "----------------------------" << "\n";
	Odejmowanie odejmowanie = Odejmowanie(l1, l2);
	cout << odejmowanie.oblicz() << endl;

	cout << "----------------------------" << "\n";
	
	
	return EXIT_SUCCESS;
}

