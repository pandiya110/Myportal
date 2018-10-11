<?php
$link = mysqli_connect("192.168.1.1", "enterpi", "enterpi", "smartforms");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$array = [];
$sql = "SELECT  * FROM items_headers AS ih WHERE ih.`status` = '1' ORDER BY ih.column_order ASC";
$result = mysqli_query($link, $sql);           
while($row = mysqli_fetch_assoc($result)){
    $array[$row['column_name']] = '';    
}

mysqli_close($link);

$jsonValue = '[{"supplyItem":{"number":555763892,"version":null,"baseDivisionCode":"WM","financialReportingGroupCode":"US","merchandiseFamilyID":102804770,"description":[{"textValue":"QKR IQO MBS BONUS PK","languageCode":"en"}],"secondaryDescription":[{"textValue":"QKR INSTANT MB BONUS","languageCode":"en"}],"isReplenishable":false,"createDate":"2016-06-09","effectiveDate":"2016-06-27","expirationDate":"2049-12-31","isImport":false,"assortmentType":{"code":null,"description":null},"status":{"code":"A","description":null,"changeTimestamp":"2016-06-09T00:00:00.000Z"},"itemType":{"code":"20","description":null},"supplierAgreement":{"supplierNumber":412213,"department":{"number":92},"sequenceNumber":2},"warehouseAlignment":{"code":"GD","description":null},"originCountry":[{"code":"US"}],"buyingRegion":{"code":"0","description":null},"isCannedOrder":false,"sendStoreDate":"2016-06-10","marshalingGroup":{"id":null,"name":null},"warehouseMinLifeRemainingToReceive":{"amount":60,"uom":"DA"},"allowedTimeInWarehouse":{"amount":360,"uom":"DA"},"reserveMerchandiseType":{"code":"0","description":null},"warehouseRotationType":{"code":"2","description":null},"isCancelWhenOut":false,"promotionOrderbookType":{"code":null,"description":null},"replenishSubType":{"code":"0","description":null},"isReplenishedByUnit":false,"warehouseMaxOrderQuantity":{"amount":null,"uom":null},"warehouseMinOrderQuantity":{"amount":0,"uom":null},"replenishmentGroup":{"number":17800,"description":null},"mbmType":{"code":"M","description":null},"bookingAccount":{"id":null,"type":null},"owningCountry":{"code":null},"destinationFormat":[{"code":"NM","description":null},{"code":"WM","description":null},{"code":"EC","description":null},{"code":"SC","description":null}],"supplyChargeDivision":{"number":null},"isOfferedForSale":true,"publishedGTIN":"20030000561922","palletGTIN":"20030000561922","orderableQuantity":{"amount":12,"uom":"EA"},"orderableGTIN":"10030000561925","orderablePackCost":{"value":24.1199,"currency":{"code":null,"description":null,"numericCode":null}},"warehousePackQuantity":{"amount":12,"uom":"EA"},"warehousePackGTIN":"10030000561925","warehousePackCost":{"value":24.1199,"currency":{"code":null,"description":null,"numericCode":null}},"consumableGTIN":"00030000561928","factory":null,"shelfLabelDescription":[{"seqNumber":4,"textValue":[{"textValue":"11PK","languageCode":"en"}]},{"seqNumber":2,"textValue":[{"textValue":"3000056192","languageCode":"en"}]},{"seqNumber":1,"textValue":[{"textValue":"QKR IQO MBS BONUS PK","languageCode":"en"}]}],"divisionNumber":null,"deptNumber":92,"subclassNumber":0,"finelineNumber":3556,"merchandiseCategoryNumber":3704,"merchandiseSubcategoryNumber":0,"season":{"id":null,"name":null,"number":null,"year":null},"exclusiveSupplyDCNumber":null,"warehousePackCalcMethod":{"code":"A","description":null},"destinationSendTraits":null,"destinationOmitTraits":null,"warehousePackSell":{"value":24.12,"currency":{"code":null,"description":null,"numericCode":null}},"accountingDeptNumber":92,"supplierCasePackType":{"code":"C","description":null},"lifecycleState":{"code":"2","description":null},"isFreshProductionRetardable":false,"isCorporateReplenishable":false,"isEcommerceReplenishable":false,"createdByUserId":"YQUINTA","createTimestamp":"2017-03-21T22:30:35.945Z","lastUpdateProgramId":"db2adapter","lastUpdateTimestamp":"2017-08-01T19:54:41.550Z","lastUpdateUserId":"EMISYNC","supplyItemAttributes":[{"name":"isPrimaryVendorInd","attributeValues":[{"seqNumber":null,"value":[{"textValue":"true","languageCode":"en"}]}],"type":null,"isMandatory":null},{"name":"isRetailNotifyStoreInd","attributeValues":[{"seqNumber":null,"value":[{"textValue":"true","languageCode":"en"}]}],"type":null,"isMandatory":null},{"name":"lastUpdateTs","attributeValues":[{"seqNumber":null,"value":[{"textValue":"2017-08-01T14:54:03.566Z","languageCode":"en"}]}],"type":null,"isMandatory":null},{"name":"buyerUserId","attributeValues":[{"seqNumber":null,"value":[{"textValue":"ADAVI24 ","languageCode":"en"}]}],"type":null,"isMandatory":null},{"name":"omitTraitCode","attributeValues":[{"seqNumber":null,"value":[{"textValue":"55741O686","languageCode":"en"}]}],"type":null,"isMandatory":null},{"name":"lastUpdateProgramId","attributeValues":[{"seqNumber":null,"value":[{"textValue":"supplyitem","languageCode":"en"}]}],"type":null,"isMandatory":null},{"name":"isRetailVatInclusiveInd","attributeValues":[{"seqNumber":null,"value":[{"textValue":"false","languageCode":"en"}]}],"type":null,"isMandatory":null}],"supplyItemClassifications":null,"abcPharmacyNumber":null,"isDCReturnable":null,"warehouseArea":{"code":"6","description":null},"buyerUserId":null,"markupPercent":null,"reportingHierarchyId":null,"isShelfLabelRequired":true,"unitCost":2.01,"itemChanges":null,"informationProviderId":{"value":"0030000000007","type":"GLN"},"recipientGLN":"0078742000008","targetMarketCode":"US","legacyProductNumber":20516975,"merchandiseProgramId":null,"eligibilityStates":[{"code":"4","description":null}],"inforemReorderType":{"code":"J","description":null},"giftCardCommissionAmount":{"value":null,"currency":null},"giftCardCommissionPercent":null,"baseRetail":{"amount":{"value":2.5,"currency":null},"type":null,"uom":"EA","isVatInclusive":null,"isNotifyStore":null},"customerRetail":{"amount":{"value":2.5,"currency":null},"type":null,"uom":null,"isVatInclusive":null,"isNotifyStore":null},"conflict":null,"licenseCode":null,"isBackroomScale":false,"isVariableWeight":false,"isVariablePriceComparision":false,"hasRFID":false,"hasSecurityTag":false,"sellTotalContentQuantity":{"amount":16.9,"uom":"OZ"},"supplierLeadTime":{"amount":null,"uom":"DA"},"supplierStockId":"3000056192","priceComparisionQuantity":{"amount":null,"uom":null},"hasRigidPlasticPackaging":false},"assortmentNumber":null,"shipperNumber":null,"responseMessage":{"code":"200","description":"OK"},"errorMessage":[]}]';
$emiResponse = array_shift(json_decode($jsonValue));
$supplyItemsGtn = array();
$apiResponse = array();

//Api 1
$arrData['signing_description'] = isset($emiResponse->supplyItem) && isset($emiResponse->supplyItem->description[0]->textValue) ? $emiResponse->supplyItem->description[0]->textValue : '';
$arrData['cost'] = isset($emiResponse->supplyItem) && isset($emiResponse->supplyItem->unitCost) ? $emiResponse->supplyItem->unitCost : '';
$arrData['supplier_nbr'] = isset($emiResponse->supplyItem) && isset($emiResponse->supplyItem->supplierAgreement->supplierNumber) ? $emiResponse->supplyItem->supplierAgreement->supplierNumber : '';
$arrData['fineline_number'] = isset($emiResponse->supplyItem) && isset($emiResponse->supplyItem->finelineNumber) ? $emiResponse->supplyItem->finelineNumber : '';
$arrData['season_year'] = isset($emiResponse->supplyItem) && isset($emiResponse->supplyItem->season->year) ? $emiResponse->supplyItem->season>year : '';
$arrData['buyer_user_id'] = isset($emiResponse->supplyItem) && isset($emiResponse->supplyItem->buyerUserId) ? $emiResponse->supplyItem->buyerUserId : '';
$arrData['gtin_nbr'] = isset($emiResponse->supplyItem) && isset($emiResponse->supplyItem->consumableGTIN) ? $emiResponse->supplyItem->consumableGTIN : '';

//Api 2
$arrData['acctg_dept_nbr'] = isset($supplyItemsGtn->results[0]) && isset($supplyItemsGtn->results[0]->accountingDeptNbr) ? $supplyItemsGtn->results[0]->accountingDeptNbr : '';
$arrData['item_file_description'] = isset($supplyItemsGtn->results[0]) && isset($supplyItemsGtn->results[0]->suppyItemPrimaryDescription) ? $supplyItemsGtn->results[0]->suppyItemPrimaryDescription : '';
$arrData['base_unit_retail'] = isset($supplyItemsGtn->results[0]) && isset($supplyItemsGtn->results[0]->baseRetailAmt) ? $supplyItemsGtn->results[0]->baseRetailAmt : '';
$arrData['category_description'] = isset($supplyItemsGtn->supplyItem) && isset($supplyItemsGtn->supplyItem->suppyItemPrimaryDescription) ? $supplyItemsGtn->supplyItem->suppyItemPrimaryDescription : '';
$arrData['items_status_code'] = isset($supplyItemsGtn->results[0]) && isset($supplyItemsGtn->results[0]->supplyItemStatusCode) ? $supplyItemsGtn->results[0]->supplyItemStatusCode : '';

//Api 3
foreach($apiResponse->productList as $objValue1){
    foreach($objValue1 as $objValue2){
        foreach($objValue2->productAttributes as $value){
               foreach($value->attributeValues as $obj){
                    foreach($obj->value as $final){
                        if(isset($value->name) && $value->name = 'upc'){
                            $arrData['upc_nbr'] = isset($final->textValue) ? $final->textValue : 0;
                        }  
                    }
               }
        }
    }       
}

$apiData = array_merge($array, $arrData);
echo '<pre>';print_r($apiData);exit;

?>