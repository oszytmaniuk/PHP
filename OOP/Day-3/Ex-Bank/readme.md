/*
-- Partie 1 :
A bank account is designated by an account number, an amount and a withdraw limit (ceiling).
A client is represented by a name, a gender, an address and has an account.
To simplify, a person has only one bank account.
Possible operations on an account:
	- Withdrawal: Withdrawal is possible from the account at any time.
	Attention, the withdrawal checks if the ceiling is not exceeded.
	The withdrawal corresponds to the withdrawal of an amount from the account.
	- Deposit: Deposit is possible at any time.
	The deposit corresponds to the addition of an amount to the account.
Allow withdrawals only if the account has a balance above the limit.
Create the corresponding class for the bank account and implement the various possible operations.
*/
**********************************
--STATIC--

/*
-- Exercise : 
Continue the bank exercise.
- Step 1 :
	Create a Log class.
	Create a static method that writes in a file a certain value $content.
	Each time you are writing to a file, you should save date and time.
- Step 2 :
	Each time a client withdraw or deposit, you should save this operation into a file.
	Use the Log class to do it.
*/