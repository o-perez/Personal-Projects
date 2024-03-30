#include<iostream>
#include<string>
#include<ctype.h>

class CardVerifier {
private:
	bool isCommon;
	bool isReal;
	bool isFraud;

	std::string type;
	char firstNumber;

public:
    void luhnAlg(int cardNumbArrRec[16]) {
        int evenDigits[8],
            oddDigits[8],
            nineAndUpp,
            evenSum = 0,
            oddSum = 0,
            totalSum = 0,
            modOpResult = 0,
            cardLastDigit = 0,
            compModRes = 0;

        //For loop to move between even card number digits.
        for (int even = 0; even < 8; even = even + 2) {
            
            nineAndUpp = cardNumbArrRec[even] * 2;
            if (nineAndUpp > 9) {
                nineAndUpp = nineAndUpp - 9;
                evenDigits[even] = nineAndUpp;
            }

            else {
                evenDigits[even] = nineAndUpp;
            }
           
            //evenDigits[even] = cardNumbArrRec[even] * 2;
        }

        for (int counter3 = 0; counter3 < 8; counter3++) {
            evenSum = evenSum + evenDigits[counter3];
        }

        //For loop to move between odd card number digits.
        for (int odd = 1; odd < 8; odd = odd + 2) {
            //std::cout << cardNumbArrRec[counter3] << std::endl;
            oddDigits[odd] = cardNumbArrRec[odd];
        }

        for (int counter4 = 0; counter4 < 16; counter4++) {
            oddSum = oddSum + oddDigits[counter4];
        }

        totalSum = evenSum + oddSum;
        modOpResult = 10 % totalSum;
        cardLastDigit = cardNumbArrRec[15];
        compModRes = modOpResult + cardLastDigit;
        
        if (compModRes == 10) {
            std::cout << "Is a valid card!" << std::endl;
        }

        else {
            std::cout << "Is a invalid card!" << std::endl;
        }
    }

    //Function that determine if is someone try attack the system.
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
            if (isdigit(currentchar)) {
                cardNumberArrChar[counter] = currentchar;
            } 

            else {
                cardFraud = true;
                isFraud = true;
                std::cout << "System attack detected!" << std::endl;
                break;
            }
		}

        if (cardFraud ==false) {

            //Nested for loop used to turn char array into decimal and save it in an array.
		    for (int counter1 = 0; counter1 < 16; counter1++) {
                for (int counter2 = 0; counter2 < 10; counter2++) {
                    if (cardNumberArrChar[counter1] == digitArrChar[counter2]) {
                        charToInt = (int)digitArrChar[counter2] - 48; //This line is for convert char to int. The number 48 is decimal value of '0'.
                        cardNumberArrInt[counter1] = charToInt;
                    }    
                }
		    }

            luhnAlg(cardNumberArrInt);
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