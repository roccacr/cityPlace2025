/**
 * Created by ces on 06/11/15.
 */
window.ParsleyLocaleData = {
    locale : 'en',
    data :  {
        defaultMessage: "This value seems to be invalid.",
        type: {
            email:        "Please enter a valid email address.",
            url:          "This value should be a valid url.",
            number:       "This value should be a valid number.",
            integer:      "This value should be a valid integer.",
            digits:       "This value should be digits.",
            alphanum:     "This value should be alphanumeric."
        },
        notblank:       "This value should not be blank.",
        required:       "This value is required.",
        pattern:        "This value seems to be invalid.",
        min:            "This value should be greater than or equal to %s.",
        max:            "This value should be lower than or equal to %s.",
        range:          "This value should be between %s and %s.",
        minlength:      "This value is too short. It should have %s characters or more.",
        maxlength:      "This value is too long. It should have %s characters or fewer.",
        length:         "This value length is invalid. It should be between %s and %s characters long.",
        mincheck:       "You must select at least %s choices.",
        maxcheck:       "You must select %s choices or fewer.",
        check:          "You must select between %s and %s choices.",
        equalto:        "This value should be the same."
    }
}
window.MyDeckLocaleData = {
    locale: 'en',

    data : {

        general : {
            loading: 'Loading',
            shop : 'Shop'
        },

        date : {
            //key value reference
            weekdaysShort : {
                'MON' : 'MON',
                'TUES': 'TUES',
                'WED' : 'WED',
                'THU' : 'THU',
                'FRI' : 'FRI',
                'SAT' : 'SAT',
                'SUN' : 'SUN'
            }
        },
        newsLetter: {
            signUp : {
                msgSuccess : 'You\'ll be the first to know about The Dubai Mall news and updates. In the meantime, why not explore the variety of outstanding stores and entertainment options on our site?',
                msgError : 'A error occured when signing up for the newsletter',
            }
        },
        topsearch: {
            showResultMsg : 'Showing search results for "%SEARCH_TEXT%"',
            noResultMsg : 'New updates will be posted soon',
            categoryTopOption : 'View by category'
        },
        fitnessPage: {
            requiredMsg : 'Required',
            alphabetsSpaceMsg : 'Please use alphabets and space only',
            validDOBMsg : 'Please provide the valid DOB',
            seatAllocationMsg : 'Maximum allocation of 60 seats filled',
            numbersOnlyMsg : 'Please use numbers only',
            digitsRestrictionMsg : 'Please enter 10 digits only',
            validEmailMsg : 'Please provide valid email address',
            emailRestrictionMsg : 'You can\'t register using the same email id more than 3 times',
            alphabetsSpaceDigitsMsg : 'Please use alphabets,numbers and space only'
        },
		digitalCoupon: {
			invalidCoupon : 'Please enter valid coupon code',
			invalidPin : 'Please enter valid pin',
			catAll : 'All',
			noOffer : 'No results found'
		}

    }

}
