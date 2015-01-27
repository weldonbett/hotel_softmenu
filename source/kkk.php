<HTML>

    <HEAD>

        <TITLE>ComputoRama Order Form</TITLE>

        <SCRIPT LANGUAGE="JavaScript">

<!-- hide the code!

function nameOK()

    {

    if (document.forms[ � ].FirstName.value.length == �)

        {

        alert("I need a first name, please");

        return false;

        }

    if (document.forms[ � ].LastName.value.length == �)

        {

        alert("I need a last name, please");

        return false;

        }

    return true;

    }



function isDigit(c)

    {

    var test = "" + c;

    if (test == "�" || test == "1" || test == "2" || test == "3" || test == "4" 

    || test == "5" || test == "6" || test == "7" || test == "8" || test == "9")

        {

        return true;

        }

    return false;

    }



function ageOK()

    {

    if (document.forms[ � ].Age.value.length == �)

        {

        alert("Sorry, you have failed to enter an age");

        return false;

        }

    var c = document.forms[ � ].Age.value.substring(�, 1);

    if (isDigit(c) == false)

        {

        alert("Sorry, you have failed to enter an appropriate age");

        return false;

        }

    var result = parseInt(document.forms[ � ].Age.value, 1�);

    if (result < 18)

        {

        alert("Sorry, you have failed to enter an appropriate age");

        return false;

        }

    return true;

    }



function isAllDigits(s)

    {

    var test = "" + s;

    for (var k = �; k < test.length; k++)

        {

        var c = test.substring(k, k+1);

        if (isDigit(c) == false)

            {

            return false;

            }

        }

    return true;

    }



function addressOK()

    {

    if (document.forms[ � ].StreetAddress.value.length == �)

        {

        alert("We need a street address");

        return false;

        }

    if (document.forms[ � ].City.value.length == �)

        {

        alert("We need a city");

        return false;

        }

    if (document.forms[ � ].State.value.length != 2)

        {

        alert("We need a 2-letter state abbreviation");

        return false;

        }

    return true;

    }



function zipOK()

    {

    var zip = document.forms[ � ].ZIPCode.value;

    if (zip.length == 5)

        {

        var result = isAllDigits(zip);

        if (result == false)

            {

            alert("Invalid character in zip code");

            }

        return result;

        }

    else if (zip.length == 1�)

        {

        var result = isAllDigits(zip.substring(�,5));

        if (result == true)

            {

            if (zip.substring(5,6) != "-")

                {

                result = false;

                }

            else

                {

                result = isAllDigits(zip.substring(6,1�));

                }

            }

        if (result == false)

            {

            alert("Invalid character in zip code");

            }

        return result;

        }

    else

        {

        alert("Invalid zip code; please re-enter it");

        return false;

        }

    }



function phoneOK()

    {

    if (document.forms[ � ].Phone1.value.length != 3)

        {

        alert("We need a phone number, including area code");

        return false;

        }

    if (document.forms[ � ].Phone2.value.length != 3)

        {

        alert("We need a phone number, including area code");

        return false;

        }

    if (document.forms[ � ].Phone3.value.length != 4)

        {

        alert("We need a phone number, including area code");

        return false;

        }

    if (isAllDigits(document.forms[ � ].Phone1.value) == false)

        {

        alert("Bad character in phone number");

        return false;

        }

    if (isAllDigits(document.forms[ � ].Phone2.value) == false)

        {

        alert("Bad character in phone number");

        return false;

        }

    if (isAllDigits(document.forms[ � ].Phone3.value) == false)

        {

        alert("Bad character in phone number");

        return false;

        }

    return true;

    }



function doubleForMod1�(c)

    {

    var d = � + c;

    if (d == �) return �;

    if (d == 1) return 2;

    if (d == 2) return 4;

    if (d == 3) return 6;

    if (d == 4) return 8;

    if (d == 5) return 1; // 5+5 = 1�; 1+� = 1

    if (d == 6) return 3; // 6+6 = 12; 1+2 = 3

    if (d == 7) return 5; // 7+7 = 14; 1+4 = 5

    if (d == 8) return 7; // 8+8 = 16; 1+6 = 7

    return 9; // (digit must be 9) 9+9 = 18; 1+8 = 9

    }



function sumForMod1�(s)

    {

    var v = parseInt(s, 1�); // get the value

    var result = doubleForMod1�(Math.floor(v / 1���));

    v = v % 1���;

    result += Math.floor(v / 1��);

    v = v % 1��;

    result += doubleForMod1�(Math.floor(v / 1�));

    v = v % 1�;

    result += v;

    return result;

    }



function validateCreditCardNumber()

    {

    if (document.forms[ � ].CreditCardNumber1.value.length != 4)

        {

        alert("The credit card number is not completely filled out");

        return false;

        }

    if (document.forms[ � ].CreditCardNumber2.value.length != 4)

        {

        alert("The credit card number is not completely filled out");

        return false;

        }

    if (document.forms[ � ].CreditCardNumber3.value.length != 4)

        {

        alert("The credit card number is not completely filled out");

        return false;

        }

    if (document.forms[ � ].CreditCardNumber4.value.length != 4)

        {

        alert("The credit card number is not completely filled out");

        return false;

        }

    if (isAllDigits(document.forms[ � ].CreditCardNumber1.value) == false)

        {

        alert("The credit card number contains invalid characters");

        return false;

        }

    if (isAllDigits(document.forms[ � ].CreditCardNumber2.value) == false)

        {

        alert("The credit card number contains invalid characters");

        return false;

        }

    if (isAllDigits(document.forms[ � ].CreditCardNumber3.value) == false)

        {

        alert("The credit card number contains invalid characters");

        return false;

        }

    if (isAllDigits(document.forms[ � ].CreditCardNumber4.value) == false)

        {

        alert("The credit card number contains invalid characters");

        return false;

        }

    if (document.forms[ � ].CreditCardType[ 1 ].checked == true) // Visa

        {

        if (document.forms[ � ].CreditCardNumber1.value.substring(�,1) != "4")

            {

            alert("The credit card number is not valid; please re-enter it");

            return false;

            }

        }

    else // must be MasterCard

        {

        var prefix = 

        parseInt(document.forms[�].CreditCardNumber1.value.substring(�,2));

        if (prefix < 51 || 55 < prefix)

            {

            alert("The credit card number is not valid; please re-enter it");

            return false;

            }

        }

    var sum = sumForMod1�(document.forms[ � ].CreditCardNumber1.value);

    sum += sumForMod1�(document.forms[ � ].CreditCardNumber2.value);

    sum += sumForMod1�(document.forms[ � ].CreditCardNumber3.value);

    sum += sumForMod1�(document.forms[ � ].CreditCardNumber4.value);

    if (sum % 1� != �)

        {

        alert("The credit card number is not valid; please re-enter it");

        return false;

        }

    return true;

    }



function dateOK()

    {

    if (document.forms[ � ].ExpirationMonth.value.length == �)

        {

        alert("You must fill in the expiration date");

        return false;

        }

    if (isDigit(document.forms[ � ].ExpirationMonth.value.substring(�,1)) == 

    false)

        {

        alert("Expiration date should be numeric");

        return false;

        }

    var eMonth = parseInt(document.forms[ � ].ExpirationMonth.value, 1�);

    if (eMonth < 1 || 12 < eMonth)

        {

        alert("Expiration date is out of range");

        }

    if (document.forms[ � ].ExpirationYear.value.length == �)

        {

        alert("You must fill in the expiration date");

        return false;

        }

    if (isDigit(document.forms[ � ].ExpirationYear.value.substring(�,1)) == false)

        {

        alert("Expiration date should be numeric");

        return false;

        }

    var eYear = parseInt(document.forms[ � ].ExpirationYear.value, 1�);

    if (eYear < 5�)

        {

        eYear += 2���;

        }

    else

        {

        eYear += 19��;

        }

    var today = new Date(); // get today's date

    var thisYear = 19�� + today.getYear();

    var thisMonth = 1 + today.getMonth();

    if (eYear < thisYear)

        {

        alert("Your credit card seems to have expired");

        return false;

        }

    if (thisYear < eYear)

        {

        return true;

        }

    if (eMonth < thisMonth)

        {

        alert("Your credit card seems to have expired");

        return false;

        }

    if (thisMonth < eMonth)

        {

        return true;

        }

    alert("Your credit card has expired or is about to expire");

    return false;

    }



function merchandiseOK()

    {

    var tally = �;

    var optionCount = document.forms[ � ].Merchandise.options.length;

    for (var k = �; k < optionCount; k++)

        {

        if (document.forms[ � ].Merchandise.options[ k ].selected == true)

            {

            tally += parseInt(document.forms[ � ].Merchandise.options[ k ].value);

            if (5��� < tally)

                {

                alert("Sorry, we cannot handle a transaction in excess of 

                $5,���.��");

                return false;

                }

            }

        }

    if (tally == �)

        {

        alert("Sorry, you don't seem to have ordered anything");

        return false;

        }

    return true;

    }



function checkForm()

    {

    if (nameOK() == false)

        {

        return;

        }

    if (ageOK() == false)

        {

        return;

        }

    if (addressOK() == false)

        {

        return;

        }

    if (zipOK() == false)

        {

        return;

        }

    if (phoneOK() == false)

        {

        return;

        }

    if (validateCreditCardNumber() == false)

        {

        return;

        }

    if (dateOK() == false)

        {

        return;

        }

    if (merchandiseOK() == false)

        {

        return;

        }

    document.forms[ � ].submit();

    }

// end of code -->

        </SCRIPT>

    </HEAD>

    <BODY>

        <FORM ACTION="mailto:mailhost@computoRama.usa.com" METHOD=POST>

            <TABLE BORDER="2" CELLPADDING="1">

                <TR>

                    <TD ROWSPAN="2">Who Are You?</TD>

                    <TD><INPUT TYPE="text" NAME="FirstName" SIZE=2�></TD>

                    <TD><INPUT TYPE="text" NAME="MiddleInitial" SIZE=1></TD>

                    <TD><INPUT TYPE="text" NAME="LastName" SIZE=2�></TD>

                    <TD><INPUT TYPE="text" NAME="Age" SIZE=3></TD>

                </TR>

                <TR>

                    <TD><FONT SIZE="-2">First Name</FONT></TD>

                    <TD><FONT SIZE="-2">MI</FONT></TD>

                    <TD><FONT SIZE="-2">Last Name></TD>

                    <TD><FONT SIZE="-2">Age</TD>

                </TR>

                <TR>

                    <TD ROWSPAN="3">How Do We Contact You?</TD>

                    <TD COLSPAN="4" VALIGN="TOP">Street Address: <TEXTAREA 

                    name="StreetAddress" rows=2 cols=3�></TEXTAREA></TD>

                </TR>

                <TR>

                    <TD COLSPAN="2">City: <INPUT TYPE="text" NAME="City" 

                    SIZE=2�></TD>

                    <TD COLSPAN="2">State: <INPUT TYPE="text" NAME="State" 

                    SIZE=2></TD>

                </TR>

                <TR>

                    <TD COLSPAN="2">ZIP Code: <INPUT TYPE="text" NAME="ZIPCode" 

                    SIZE=1�></TD>

                    <TD COLSPAN="2">Daytime Phone

                        (<INPUT TYPE="text" NAME="Phone1" SIZE=3>)

                        <INPUT TYPE="text" NAME="Phone2" SIZE=3>-

                        <INPUT TYPE="text" NAME="Phone3" SIZE=4></TD>

                </TR>

                <TR>

                    <TD>Credit Card

                        <INPUT TYPE="radio" NAME="CreditCardType" VALUE="Visa" 

                        CHECKED>Visa

                        <INPUT TYPE="radio" NAME="CreditCardType" 

                        VALUE="MasterCard">M/C</TD>

                    <TD COLSPAN="2" ALIGN="CENTER">

                        <INPUT TYPE="text" NAME="CreditCardNumber1" SIZE=4>

                        <INPUT TYPE="text" NAME="CreditCardNumber2" SIZE=4>

                        <INPUT TYPE="text" NAME="CreditCardNumber3" SIZE=4>

                        <INPUT TYPE="text" NAME="CreditCardNumber4" SIZE=4></TD>

                    <TD COLSPAN="2">Expiration Date:

                        <INPUT TYPE="text" NAME="ExpirationMonth" SIZE=2>/

                        <INPUT TYPE="text" NAME="ExpirationYear" SIZE=2></TD>

                </TR>

                <TR>

                    <TD>Merchandise</TD>

                    <TD COLSPAN=4><SELECT MULTIPLE NAME="Merchandise" SIZE=1>

                        <OPTION SELECTED VALUE="2���"> HAL-47� <OPTION 

                        VALUE="3���"> Banana9���

                        <OPTION VALUE="8��"> High Res Monitor <OPTION VALUE="5�"> 

                        Low Res Monitor

                        <OPTION VALUE="25�"> Deluxe Keyboard <OPTION VALUE="4�"> 

                        Regular Keyboard

                        <OPTION VALUE="2���"> Laser Printer <OPTION VALUE="6��"> 

                        Inkjet Printer <OPTION VALUE="2��"> Dot Matrix Printer

                        <OPTION VALUE="1��"> Mouse <OPTION VALUE="125"> Trackball

                        <OPTION VALUE="5��"> Scanner

                        </SELECT></TD>

                </TR>

                <TR>

                    <TD ALIGN=CENTER COLSPAN="5">

                        <H1>Thank You For Your Order!</H1>

                    </TD>

                </TR>

            </TABLE>

            <CENTER>

                <INPUT TYPE="button" VALUE="Ship It!" ONCLICK="checkForm()">

                <INPUT TYPE="reset" VALUE="Clear Entries">

            </CENTER>

        </FORM>

    </BODY>

</HTML>

