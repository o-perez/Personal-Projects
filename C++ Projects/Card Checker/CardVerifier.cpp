#include<iostream>
#include<string>
#include<ctype.h>

class CardVerifier {
private:
	bool isCommon;
	bool isReal;
	bool isFake;

	std::string type;
	char firstNumber;

public:

	void checkigValidation(std::string cardNumberToRecFunc) {
        char cardNumberArrChar[16],
            currentchar;
        const char digitArrChar[] = { '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' };
		int cardNumberArrInt[16];
		int charToInt,
            counter;
        bool cardFraud = false;
		std::string charToString;

        //For loop used to turn the entered card number into an char array.
		for (int counter = 0; counter < cardNumberToRecFunc.size(); counter++) {
            currentchar = cardNumberToRecFunc.at(counter);
            if (!isdigit(currentchar)) {
                 std::cout << "This card is a fraud!" << std::endl;
                 cardFraud = true;
                break;
            }

            else {
                cardNumberArrChar[counter] = cardNumberToRecFunc.at(counter);      
            }
		}

        /*while (counter < cardNumberToRecFunc.size() || cardFraud != true) {
            currentchar = cardNumberToRecFunc.at(counter);
            if (!isdigit(currentchar)) {
                std::cout << "This card is a fraud!" << std::endl;
                cardFraud = true;
            }

            else {
                cardNumberArrChar[counter] = cardNumberToRecFunc.at(counter);
                counter++;
            }
        }*/

        if (cardFraud == false) {
            //Nested for loop used to turn char array into decimal and save it in an array.
		    for (int counter1 = 0; counter1 < 16; counter1++) {
                for (int counter2 = 0; counter2 < 10; counter2++) {
                    charToInt = (int)digitArrChar[counter2] - 48; //This line is for convert char to int. The number 48 is decimal value of '0'.
                    cardNumberArrInt[counter1] = charToInt;
                }
		    }

            //For loop to move between the card number digits.
            for (int counter3 = 0; counter3 < 16; counter3++) {
                std::cout << cardNumberArrInt[counter3] << std::endl;
            }
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

