#include <iostream>
using namespace std;
class Samochody {
private:
    string name;
    float pojemnosc;
public:
    Samochody() {
        cout << "TO JEST DEFAULT KONSTRUKTOR chopie" << endl;
    }
    Samochody(string mojanazwa) {
        this->name = mojanazwa;
        cout << "TO JEST  KONSTRUKTOR" << this->name << endl; 
    }
    Samochody(string mojanazwa,float poj) {
        this->name = mojanazwa;
        this->pojemnosc = poj;
        cout << "TO JEST  KONSTRUKTOR" << this->name << endl;
        cout << "Pojemnosc" << this->pojemnosc << endl;
    }
};  


int main()
{
    Samochody fiat("Volvo",1.8);
    return EXIT_SUCCESS;
}
