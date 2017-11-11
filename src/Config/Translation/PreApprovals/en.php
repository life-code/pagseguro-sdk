<?php

return [
    '10003' => "Email invalid value.",
    '10005' => "The accounts of the vendor and buyer can not be related to each other.",
    '10009' => "Method of payment currently unavailable.",
    '10020' => "Invalid payment method.",
    '10021' => "Error fetching vendor data from the system.",
    '10023' => "Payment Method unavailable.",
    '10024' => "Unregistered buyer is not allowed.",
    '10025' => "senderName cannot be blank.",
    '10026' => "senderEmail cannot be blank.",
    '10049' => "senderName mandatory.",
    '10050' => "senderEmail mandatory.",
    '11002' => "receiverEmail invalid length: {0}",
    '11006' => "redirectURL invalid length: {0}",
    '11007' => "redirectURL invalid value: {0}",
    '11008' => "reference invalid length: {0}",
    '11013' => "senderAreaCode invalid value: {0}",
    '11014' => "senderPhone invalid value: {0}",
    '11027' => "Item quantity out of range: {0}",
    '11028' => "Item amount is required. (e.g. '12.00')",
    '11040' => "maxAge invalid pattern: {0}. Must be an integer.",
    '11041' => "maxAge out of range: {0}",
    '11042' => "maxUses invalid pattern: {0}. Must be an integer.",
    '11043' => "maxUses out of range: {0}",
    '11054' => "abandonURL/reviewURL invalid length: {0}",
    '11055' => "abandonURL/reviewURL invalid value: {0}",
    '11071' => "preApprovalInitialDate invalid value.",
    '11072' => "preApprovalFinalDate invalid value.",
    '11084' => "seller has no credit card payment option.",
    '11101' => "preApproval data is required.",
    '11163' => "You must configure a transactions notifications (Notificação de Transações) URL before using this service.",
    '11211' => "pre-approval cannot be paid twice on the same day.",
    '13005' => "initialDate must be lower than allowed limit.",
    '13006' => "initialDate must not be older than 180 days.",
    '13007' => "initialDate must be lower than or equal finalDate.",
    '13008' => "search interval must be lower than or equal 30 days.",
    '13009' => "finalDate must be lower than allowed limit.",
    '13010' => "initialDate invalid format use 'yyyy-MM-ddTHH:mm' (eg. 2010-01-27T17:25).",
    '13011' => "finalDate invalid format use 'yyyy-MM-ddTHH:mm' (eg. 2010-01-27T17:25).",
    '13013' => "page invalid value.",
    '13014' => "maxPageResults invalid value (must be between 1 and 1000).",
    '13017' => "initialDate and finalDate are required on searching by interval.",
    '13018' => "interval must be between 1 and 30.",
    '13019' => "notification interval is required.",
    '13020' => "page is greater than the total number of pages returned.",
    '13023' => "Invalid minimum reference length (1-255)",
    '13024' => "Invalid maximum reference length (1-255)",
    '17008' => "pre-approval not found.",
    '17022' => "invalid pre-approval status to execute the requested operation. Pre-approval status is {0}.",
    '17023' => "seller has no credit card payment option.",
    '17024' => "pre-approval is not allowed for this seller {0}",
    '17032' => "invalid receiver for checkout: {0} verify receiver's account status and if it is a seller's account.",
    '17033' => "preApproval.paymentMethod isn't {0} must be the same from pre-approval.",
    '17035' => "Due days format is invalid: {0}.",
    '17036' => "Due days value is invalid: {0}. Any value from 1 to 120 is allowed.",
    '17037' => "Due days must be smaller than expiration days.",
    '17038' => "Expiration days format is invalid: {0}.",
    '17039' => "Expiration value is invalid: {0}. Any value from 1 to 120 is allowed.",
    '17061' => "Plan not found.",
    '17063' => "Hash is mandatory.",
    '17065' => "Documents required.",
    '17066' => "Invalid document quantity.",
    '17067' => "Payment method type is mandatory.",
    '17068' => "Payment method type is invalid.",
    '17069' => "Phone is mandatory.",
    '17070' => "Address is mandatory.",
    '17071' => "Sender is mandatory.",
    '17072' => "Payment method is mandatory.",
    '17073' => "Credit card is mandatory.",
    '17074' => "Credit card holder is mandatory.",
    '17075' => "Credit card token is invalid.",
    '17078' => "Expiration date reached.",
    '17079' => "Use limit exceeded.",
    '17080' => "Pre-approval is suspended.",
    '17081' => "pre-approval payment order not found.",
    '17082' => "invalid pre-approval payment order status to execute the requested operation. Pre-approval payment order status is {0}.",
    '17083' => "Pre-approval is already {0}.",
    '17093' => "Sender hash or IP is required.",
    '17094' => "There can be no new subscriptions to an inactive plan.",
    '19001' => "postalCode invalid Value: {0}",
    '19002' => "addressStreet invalid length: {0}",
    '19003' => "addressNumber invalid length: {0}",
    '19004' => "addressComplement invalid length: {0}",
    '19005' => "addressDistrict invalid length: {0}",
    '19006' => "addressCity invalid length: {0}",
    '19007' => "addressState invalid value: {0} must fit the pattern: \w{2} (e. g. 'SP')",
    '19008' => "addressCountry invalid length: {0}",
    '19014' => "senderPhone invalid value: {0}",
    '19015' => "addressCountry invalid pattern: {0}",
    '50103' => "postal code can not be empty",
    '50105' => "address number can not be empty",
    '50106' => "address district can not be empty",
    '50107' => "address country can not be empty",
    '50108' => "address city can not be empty",
    '50131' => "The IP address does not follow a valid pattern",
    '50134' => "address street can not be empty",
    '53037' => "credit card token is required.",
    '53042' => "credit card holder name is required.",
    '53047' => "credit card holder birthdate is required.",
    '53048' => "credit card holder birthdate invalid value: {0}",
    '53151' => "Discount value cannot be blank.",
    '53152' => "Discount value out of range. For DISCOUNT_PERCENT type the value must be greater than or equal to 0.00 and less than or equal to 100.00.",
    '53153' => "not found next payment for this preApproval.",
    '53154' => "Status cannot be blank.",
    '53155' => "Discount type is mandatory.",
    '53156' => "Discount type invalid value. Valid values are: DISCOUNT_AMOUNT and DISCOUNT_PERCENT.",
    '53157' => "Discount value out of range. For DISCOUNT_AMOUNT type the value must be greater than or equal to 0.00 and less than or equal to the maximum amount of the corresponding payment.",
    '53158' => "Discount value is mandatory.",
    '57038' => "address state is required.",
    '61007' => "document type is required.",
    '61008' => "document type is invalid: {0}",
    '61009' => "document value is required.",
    '61010' => "document value is invalid: {0}",
    '61011' => "cpf is invalid: {0}",
    '61012' => "cnpj is invalid: {0}",
];