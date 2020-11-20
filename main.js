placeToPrint=document.getElementById("root");
const getUniqueArray = arr => {
    return [...new Set(arr)];
};

const printChild=(parentId,informationArr)=>{
    placeToPrint.innerHTML+="Child from parent_id: "+parentId+"<br>";
    for(j=0;j<informationArr.length;j++){
        if(parentId==informationArr[j].parent_id){
            placeToPrint.innerHTML+=informationArr[j].name+"<br>";
        }
    }
}

const getInformation=()=>{
    tmpParentArr=0;

    for(i=0;i<parentChildInformation.length;i++){
        tmpParentArr+=parentChildInformation[i].parent_id;
    }

    uniqueParents=getUniqueArray(tmpParentArr);

    for(i=0;i<uniqueParents.length;i++){
        printChild(uniqueParents[i],parentChildInformation);
    }
}

getInformation();