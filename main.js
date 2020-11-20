placeToPrint = document.getElementById("root");
parentArr = [];
for (i = 0; i < parentChildInformation.length; i++) {
  if (parentChildInformation[i].parent_id == 0) {
    parentArr += parentChildInformation[i].name;
  }
}

const getInformation = (ind) => {
  if (ind < parentArr.length) {
    placeToPrint.innerHTML += parentArr[ind];
    for (j = 0; j < parentChildInformation.length; j++) {
      if (ind + 1 == parentChildInformation[j].parent_id) {
        placeToPrint.innerHTML += parentChildInformation[j].name;
      }
    }
    ind++;
    getInformation(ind);
  }
};

getInformation(0);
