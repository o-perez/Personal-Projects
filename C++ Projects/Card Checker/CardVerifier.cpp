#include<iostream>
#include<string>

class CardVerifier {
private:
	bool isCommon;
	bool isReal;
	bool isFake;

	std::string type;
	char firstNumber;

public:

	void checkigValidation(std::string cardNumberToRecFunc) {
		char cardNumberArrChar[16];
		int cardNumberArrInt[16];
		int charToInt;
		std::string charToString;

		for (int counter = 0; counter < cardNumberToRecFunc.size(); counter++) {
			cardNumberArrChar[counter] = cardNumberToRecFunc.at(counter);
			//std::cout << cardNumberArrChar[counter] << "\n" << std::endl;
		}

		for (int counter1 = 0; counter1 < 16; counter1++) {
			/*
			charToString = cardNumberArrChar[counter1];
			cardNumberArrInt[counter1] = std::stoi(charToString);
			std::cout << cardNumberArrInt[counter1] << "\n" << std::endl;*/
			charToInt = cardNumberArrChar[counter1] - '0';
			cardNumberArrInt[counter1] = charToInt;
			std::cout << cardNumberArrInt[counter1] << "\n" << std::endl;
		}
	}
	//Function that is on charge of determines which type is the card.
	void definningTheType(std::string cardNumberToRecFunc) {
		firstNumber = cardNumberToRecFunc.at(0);

		switch (firstNumber) {
		case '1':
			type = "Airlines";
			break;

		case '2':
			type = "Airlines and financial";
			break;

		case '3':
			if (cardNumberToRecFunc.at(1) == '4' || cardNumberToRecFunc.at(1) == '7') {
				type = "American Express";
				break;
			}

			else {
				type = "Travel and entertainment";
				break;
			}

		case '4':
			type = "Visa";
			break;

		case '5':
			type = "Mastercard";
			break;

		case '6':
			type = "Discover";
			break;

		case '7':
			type = "Petroleoum";
			break;

		case '8':
			type = "Health care and communications";
			break;

		case '9':
			type = "Government";
			break;

		default:
			std::cout << "The card entered is not a registered type" << std::endl;
		}
	}

	CardVerifier(std::string cardNumberToRec, std::string WhatToDo) {
		if (WhatToDo == "verfType") {
			definningTheType(cardNumberToRec);
		}

		else if (WhatToDo == "validate") {
			checkigValidation(cardNumberToRec);
		}
	}

	std::string getType() {
		return type;
	}
};

