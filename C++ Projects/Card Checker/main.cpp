#include <iostream>
#include <string>
#include "CardVerifier.cpp"


int main() {

	bool closeApp = false;
	int userOption;
	int counter = 0;
	std::string CardnumberToSend;
	std::string cardArr[5];

	std::cout << "Hi!\nThis is card system verifier." << std::endl;

	do {
		std::cout << "What you want to do?\n1. Verfied what is the card type.\n2. Verified if is a valid card.\n"
			"3. Verified type and validate it.\n4. Verfied if is common type card by amount of 5 cards.\n"
			"5. Verified if is a valid card by amount of 5 cards. \n6. Verified type and validate it "
			"by amount of 5 of cards.\n0. Exit" << std::endl;
		std::cout << "What do you want to do? ";
		std::cin >> userOption;

		switch (userOption) {

			//Verified if is common type.
		case 1:
			std::cout << "Enter the card number: ";
			std::cin >> CardnumberToSend;

			if (CardnumberToSend.size() < 16) {
				std::cout << "The number of the card is not complete." << std::endl;
			}

			else if (CardnumberToSend.size() > 16) {
				std::cout << "The number of the card is to long." << std::endl;
			}

			else {
				CardVerifier checkingCardType(CardnumberToSend, "verfType");
				std::cout << "The card is " + checkingCardType.getType() + " type" << std::endl;
			}
			break;

			//Verified if is a valid card
		case 2:
			std::cout << "Enter the card number: ";
			std::cin >> CardnumberToSend;

			if (CardnumberToSend.size() < 16) {
				std::cout << "The number of the card is not complete." << std::endl;
			}

			else if (CardnumberToSend.size() > 16) {
				std::cout << "The number of the card is to long." << std::endl;
			}

			else {
				CardVerifier checkingCardValid(CardnumberToSend, "validate");
			}
			break;

		case 3:
			std::cout << "Enter the card number" << std::endl;
			std::cin >> CardnumberToSend;
			break;

		case 4:

			for (counter; counter < 5; counter++) {
				std::cout << "Enter the card number: ";
				std::cin >> CardnumberToSend;
				cardArr[counter] = CardnumberToSend;
			}

		case 5:
			for (counter; counter < 5; counter++) {
				std::cout << "Enter the card number: ";
				std::cin >> CardnumberToSend;
				cardArr[counter] = CardnumberToSend;
			}

		case 6:
			for (counter; counter < 5; counter++) {
				std::cout << "Enter the card number: ";
				std::cin >> CardnumberToSend;
				cardArr[counter] = CardnumberToSend;
			}

		case 0:
			closeApp = true;
			break;

		default:
			std::cout << "Enter a valid option" << std::endl;
		}
	} while (closeApp != true);
	return 0;
}