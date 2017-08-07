[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Kite/functions?utm_source=RapidAPIGitHub_KiteFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Kite Package
Kite.ly is a technology suite that can be embedded in any mobile app or website, enabling brands & businesses to print and ship products anywhere in the world. 
* Domain: [Kite](http://kite.ly)
* Credentials: apiKey, apiSecret

## How to get credentials: 
0. Open [Kite web-site](https://www.kite.ly)
1. Register or log in
2. Go to [Dashboard Credentials](https://www.kite.ly/settings/credentials) to get your api Key and api Secret

 ## Webhook credentials
 
 You can use our service as webhookUrl: 
    ```
    https://webhooks.rapidapi.io/api/message/Kite/webhookEvent/{projectName}/{projectKey} * see credentials description above
    ```
You can add a webhook link at the [Dashboard Notifications](https://www.kite.ly/settings/notifications)
 
 Please use SDK to test this feature.
 
 0. Go to [RapidAPI](http://rapidapi.io)
 1. Log in or create an account
 2. Go to [My apps](https://dashboard.rapidapi.io/projects)
 3. Add new project with projectName to get your project Key
 
 | Field      | Type       | Description
 |------------|------------|----------
 | projectName     | credentials| Your RapidAPI project name
 | projectKey | credentials     | Your RapidAPI project key


## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Kite.requestAssetUploadLinks
Make a request to the Kite servers to get a signed Amazon S3 URL to which you can upload the asset. 

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key received from Kite
| apiSecret| credentials| Api secret received from Kite
| mimeTypes| List       | Array of one or more mime types for the assets that you want to upload.

## Kite.uploadAsset
Upload asset using previously generated link

| Field          | Type  | Description
|----------------|-------|----------
| signedAssetLink| String| signed_requests from requestAssetUploadLinks
| asset          | File  | Asset file
| mimeType       | Select| Mime type for the assets that you want to upload.

## Kite.orderPrintProduct
Make an order for print products

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from Kite
| apiSecret    | credentials| Api secret received from Kite
| templateType | Select     | Template type to print. Detailed information available at https://www.kite.ly/docs/#ordering-print-products
| assets       | List       | Array of one or more assets to print
| recipientName| String     | The name of the person intended to receive the order
| customerPhone| String     | Customer phone
| customerEmail| String     | Customer email
| addressLine1 | String     | The first line of the address
| addressLine2 | String     | The second line of the address
| addressLine3 | String     | The third line of the address
| addressLine4 | String     | The fourth line of the address
| countyState  | String     | The state/county/province of the address
| city         | String     | The city of the address
| postCode     | String     | The postcode of the address
| countryCode  | String     | The countrycode of the address
| amount       | String     | Accurate representation on the profit made on the sale within the orders section of the Kite dashboard.
| currency     | String     | Currency code

## Kite.orderPhoneCase
Make an order for phone case

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from Kite
| apiSecret    | credentials| Api secret received from Kite
| templateType | Select     | Template type to print. Detailed information available at - https://www.kite.ly/docs/#ordering-phone-cases
| caseStyle    | Select     | Defaults to gloss if not present. matte style only valid for i4_case, i5_case, i5c_case, i6_case, i6s_case, i6plus_case, i6splus_case, samsung_s4_case, samsung_s5_case, samsung_s6_case , samsung_s6e_case, samsung_s7_case and samsung_s7e_case.
| assets       | List       | Array of one or more assets to print
| recipientName| String     | The name of the person intended to receive the order
| customerPhone| String     | Customer phone
| customerEmail| String     | Customer email
| addressLine1 | String     | The first line of the address
| addressLine2 | String     | The second line of the address
| addressLine3 | String     | The third line of the address
| addressLine4 | String     | The fourth line of the address
| countyState  | String     | The state/county/province of the address
| city         | String     | The city of the address
| postCode     | String     | The postcode of the address
| countryCode  | String     | The countrycode of the address
| amount       | String     | Accurate representation on the profit made on the sale within the orders section of the Kite dashboard.
| currency     | String     | Currency code

## Kite.orderHomeware
Make an order for homeware

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from Kite
| apiSecret    | credentials| Api secret received from Kite
| templateType | Select     | Template type to print. Detailed information available at - https://www.kite.ly/docs/#ordering-homeware
| assets       | List       | Array of one or more assets to print
| recipientName| String     | The name of the person intended to receive the order
| customerPhone| String     | Customer phone
| customerEmail| String     | Customer email
| addressLine1 | String     | The first line of the address
| addressLine2 | String     | The second line of the address
| addressLine3 | String     | The third line of the address
| addressLine4 | String     | The fourth line of the address
| countyState  | String     | The state/county/province of the address
| city         | String     | The city of the address
| postCode     | String     | The postcode of the address
| countryCode  | String     | The countrycode of the address
| amount       | String     | Accurate representation on the profit made on the sale within the orders section of the Kite dashboard.
| currency     | String     | Currency code

## Kite.orderDTGApparel
Make an order for dtg apparel

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from Kite
| apiSecret    | credentials| Api secret received from Kite
| templateType | Select     | Template type to print. Detailed information available at - https://www.kite.ly/docs/#ordering-dtg-apparel
| garmentSize  | Select     | The size of garment you want created. 
| garmentColor | String     | The base material/fabric colour of the garment you want created. Possible values - https://www.kite.ly/docs/#available-garment-colours
| centerChest  | String     | Asset to print on center chest.
| centerBack   | String     | Asset to print on center back.
| recipientName| String     | The name of the person intended to receive the order
| customerPhone| String     | Customer phone
| customerEmail| String     | Customer email
| addressLine1 | String     | The first line of the address
| addressLine2 | String     | The second line of the address
| addressLine3 | String     | The third line of the address
| addressLine4 | String     | The fourth line of the address
| countyState  | String     | The state/county/province of the address
| city         | String     | The city of the address
| postCode     | String     | The postcode of the address
| countryCode  | String     | The countrycode of the address
| amount       | String     | Accurate representation on the profit made on the sale within the orders section of the Kite dashboard.
| currency     | String     | Currency code

## Kite.orderSublimationApparel
Make an order for sublimation apparel

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from Kite
| apiSecret    | credentials| Api secret received from Kite
| templateType | Select     | Template type to print. Detailed information available at - https://www.kite.ly/docs/#ordering-sublimation-apparel
| garmentSize  | Select     | The size of garment you want created. 
| frontImage   | String     | Asset to print on front area
| backImage    | String     | Asset to print on back area
| recipientName| String     | The name of the person intended to receive the order
| customerPhone| String     | Customer phone
| customerEmail| String     | Customer email
| addressLine1 | String     | The first line of the address
| addressLine2 | String     | The second line of the address
| addressLine3 | String     | The third line of the address
| addressLine4 | String     | The fourth line of the address
| countyState  | String     | The state/county/province of the address
| city         | String     | The city of the address
| postCode     | String     | The postcode of the address
| countryCode  | String     | The countrycode of the address
| amount       | String     | Accurate representation on the profit made on the sale within the orders section of the Kite dashboard.
| currency     | String     | Currency code

## Kite.orderPhotobookByJson
Make an order for photobook using json structure

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from Kite
| apiSecret    | credentials| Api secret received from Kite
| templateType | Select     | Template type to print. Detailed information available at - https://www.kite.ly/docs/#ordering-photobooks
| pages        | List       | Array of at least 20 page assets to print. 
| frontCover   | String     | Asset to print on front cover
| backCover    | String     | Asset to print on back cover
| recipientName| String     | The name of the person intended to receive the order
| customerPhone| String     | Customer phone
| customerEmail| String     | Customer email
| addressLine1 | String     | The first line of the address
| addressLine2 | String     | The second line of the address
| addressLine3 | String     | The third line of the address
| addressLine4 | String     | The fourth line of the address
| countyState  | String     | The state/county/province of the address
| city         | String     | The city of the address
| postCode     | String     | The postcode of the address
| countryCode  | String     | The countrycode of the address
| amount       | String     | Accurate representation on the profit made on the sale within the orders section of the Kite dashboard.
| currency     | String     | Currency code

## Kite.orderPhotobookByPDF
Make an order for photobook using pre-made PDF

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from Kite
| apiSecret    | credentials| Api secret received from Kite
| templateType | Select     | Template type to print. Detailed information available at - https://www.kite.ly/docs/#ordering-photobooks
| insidePdf    | String     | An image URL accessible to the Kite servers or an asset object identifier that you have received by uploading an asset to Kite. This image will be used as the inside block.
| coverPdf     | String     | An image URL accessible to the Kite servers or an asset object identifier that you have received by uploading an asset to Kite. This image will be used as the front / back cover spread.
| recipientName| String     | The name of the person intended to receive the order
| customerPhone| String     | Customer phone
| customerEmail| String     | Customer email
| addressLine1 | String     | The first line of the address
| addressLine2 | String     | The second line of the address
| addressLine3 | String     | The third line of the address
| addressLine4 | String     | The fourth line of the address
| countyState  | String     | The state/county/province of the address
| city         | String     | The city of the address
| postCode     | String     | The postcode of the address
| countryCode  | String     | The countrycode of the address
| amount       | String     | Accurate representation on the profit made on the sale within the orders section of the Kite dashboard.
| currency     | String     | Currency code

## Kite.orderPostcard
Make an order for postcard

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from Kite
| apiSecret    | credentials| Api secret received from Kite
| frontImage   | String     | A image URL accessible to the Kite servers or an asset object identifier that you have received by uploading an asset to Kite. It will form the front of the postcard
| message      | String     | The text message that you want to appear on the back of the postcard
| recipientName| String     | The name of the person intended to receive the order
| customerPhone| String     | Customer phone
| customerEmail| String     | Customer email
| addressLine1 | String     | The first line of the address
| addressLine2 | String     | The second line of the address
| addressLine3 | String     | The third line of the address
| addressLine4 | String     | The fourth line of the address
| countyState  | String     | The state/county/province of the address
| city         | String     | The city of the address
| postCode     | String     | The postcode of the address
| countryCode  | String     | The countrycode of the address
| amount       | String     | Accurate representation on the profit made on the sale within the orders section of the Kite dashboard.
| currency     | String     | Currency code

## Kite.orderGreetingCard
Make an order for greeting card

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Api key received from Kite
| apiSecret       | credentials| Api secret received from Kite
| templateType    | Select     | Template type to print. Detailed information available at - https://www.kite.ly/docs/#ordering-greeting-cards
| frontImage      | String     | A image URL accessible to the Kite servers or an asset object identifier that you have received by uploading an asset to Kite. It will form the front of the greetings card
| backImage       | String     | A image URL accessible to the Kite servers or an asset object identifier that you have received by uploading an asset to Kite.
| insideLeftImage | String     | A image URL accessible to the Kite servers or an asset object identifier that you have received by uploading an asset to Kite.
| insideRightImage| String     | A image URL accessible to the Kite servers or an asset object identifier that you have received by uploading an asset to Kite.
| recipientName   | String     | The name of the person intended to receive the order
| customerPhone   | String     | Customer phone
| customerEmail   | String     | Customer email
| addressLine1    | String     | The first line of the address
| addressLine2    | String     | The second line of the address
| addressLine3    | String     | The third line of the address
| addressLine4    | String     | The fourth line of the address
| countyState     | String     | The state/county/province of the address
| city            | String     | The city of the address
| postCode        | String     | The postcode of the address
| countryCode     | String     | The countrycode of the address
| amount          | String     | Accurate representation on the profit made on the sale within the orders section of the Kite dashboard.
| currency        | String     | Currency code

## Kite.orderInvitation
Make an order for invitation

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from Kite
| apiSecret    | credentials| Api secret received from Kite
| templateType | Select     | Template type to print. Detailed information available at - https://www.kite.ly/docs/#ordering-invitations
| frontImage   | String     | A image URL accessible to the Kite servers or an asset object identifier that you have received by uploading an asset to Kite.
| backImage    | String     | A image URL accessible to the Kite servers or an asset object identifier that you have received by uploading an asset to Kite.
| recipientName| String     | The name of the person intended to receive the order
| customerPhone| String     | Customer phone
| customerEmail| String     | Customer email
| addressLine1 | String     | The first line of the address
| addressLine2 | String     | The second line of the address
| addressLine3 | String     | The third line of the address
| addressLine4 | String     | The fourth line of the address
| countyState  | String     | The state/county/province of the address
| city         | String     | The city of the address
| postCode     | String     | The postcode of the address
| countryCode  | String     | The countrycode of the address
| amount       | String     | Accurate representation on the profit made on the sale within the orders section of the Kite dashboard.
| currency     | String     | Currency code

## Kite.listOrders
List all orders

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Api key received from Kite
| apiSecret      | credentials| Api secret received from Kite
| orderBy        | Select     | Controls the ordering of the returned orders, valid options are time_submitted & status. A - can be added to the front of any option i.e. -time_submitted to reverse the ordering.
| testOrder      | Boolean    | If true then the results will be be filtered to only include test orders, if false then only live orders will be returned
| errorExclude   | Boolean    | If true then results will be filtered to only include successful orders, if false then only orders for which an error has occured will be returned
| refundRequested| Boolean    | If true then results will be filtered to only include orders for which the customer has requested a refunded, if false then only orders for which there has been no refund request
| timeSubmitted  | DatePicker | GTE datetime. Orders will be filtered to only include those that were placed after this date & time
| offset         | Number     | The offset into the result set of objects returned
| limit          | Number     | By default, you get returned a paginated set of objects (20 per page is the default), by specifying the limit argument you can control the number of objects returned

## Kite.getOrderStatus
Get status of single order

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key received from Kite
| apiSecret| credentials| Api secret received from Kite
| orderId  | String     | Id of the order

## Kite.listShippingMethods
List all shipping methods

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key received from Kite
| apiSecret| credentials| Api secret received from Kite
| offset   | Number     | The offset into the result set of objects returned
| limit    | Number     | By default, you get returned a paginated set of objects (20 per page is the default), by specifying the limit argument you can control the number of objects returned

## Kite.getShippingMethodsByTemplate
List all shipping methods for the template

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key received from Kite
| apiSecret| credentials| Api secret received from Kite
| template | String     | Name of the template
| offset   | Number     | The offset into the result set of objects returned
| limit    | Number     | By default, you get returned a paginated set of objects (20 per page is the default), by specifying the limit argument you can control the number of objects returned

## Kite.listCustomers
List all customers

| Field              | Type       | Description
|--------------------|------------|----------
| apiKey             | credentials| Api key received from Kite
| apiSecret          | credentials| Api secret received from Kite
| customer           | String     | If true then the resulting people list will be filtered to only include those who have placed an order, if false then the resulting list will only include people who have not placed an order
| country            | List       | Array of 3 digit country codes i.e. GBR,USA that will filter the resulting person list to only include people coming from the specified countries
| orderCountMore     | Number     | Filters the resulting list to only include customers who have ordered more than the specified number of times
| orderCountLess     | Number     | Filters the resulting list to only include customers who have ordered less than the specified number of times
| lastOrderedDateMore| String     | Filters the resulting person list to only include people that have ordered more recently that the value. Valid values include Ndays, Nweeks, Nmonths where N is a number. E.g. 1days / 7weeks.
| lastOrderedDateLess| String     | Filters the resulting person list to only include people that have ordered less recently that the value. Valid values include Ndays, Nweeks, Nmonths where N is a number. E.g. 1days / 7weeks.
| offset             | Number     | The offset into the result set of objects returned
| pushTokenIsset     | Boolean    | If true filters the resulting list to only include people with push notification tokens, if false filters the resulting list to only include people without push notification tokens
| livePerson         | Boolean    | If true filters the resulting person list to only include people created in the live environment, if false filters the resulting person list to only include people created in the test environment
| createdBefore      | DatePicker | Filters the resulting list to only include those people created before the specified date time
| limit              | Number     | By default, you get returned a paginated set of objects (20 per page is the default), by specifying the limit argument you can control the number of objects returned

## Kite.getCustomerDetails
Get detailed information about single customer

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key received from Kite
| apiSecret | credentials| Api secret received from Kite
| customerId| String     | Id of the customer

## Kite.searchAddressBySearchTerm
You can perform a search on any part of the address not just the ZIP/Postal code and our smart sorting of results will order by nearest locations first. We also recognise common misspellings.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key received from Kite
| apiSecret  | credentials| Api secret received from Kite
| countryCode| String     | Three letter country code to which the address search will be restricted
| searchTerm | String     | A free text value, often encompassing the first line of address or ZIP/Postal code, on which the search is performed.

## Kite.searchAddressByAddressId
You can perform a search on any part of the address not just the ZIP/Postal code and our smart sorting of results will order by nearest locations first. We also recognise common misspellings.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key received from Kite
| apiSecret  | credentials| Api secret received from Kite
| countryCode| String     | Three letter country code to which the address search will be restricted
| addressId  | String     | A parameter referencing a previously returned address search results list item that can be used to lookup a unique address. 

