placeToPrint = document.getElementById("root");
parentArr = [];
for (i = 0; i < parentChildInformation.length; i++) {
  if (parentChildInformation[i].parent_id == 0) {
    parentArr += parentChildInformation[i].name;
  }
}

const printChild = (indParent) => {
  for (i = 0; i < parentChildInformation.length; i++) {
    if (indParent == parentChildInformation[i].parent_id) {
      placeToPrint.innerHTML += parentChildInformation[i].name;
    }
  }
};

const getInformation = () => {
  for (j = 0; j < parentArr.length; j++) {
    placeToPrint.innerHTML += parentArr[j];
    printChild(j + 1);
  }
};

getInformation();
