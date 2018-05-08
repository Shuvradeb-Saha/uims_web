function addProductValidation() {
    var category = document.getElementById("category").value;
    var product = document.getElementById("product").value;

    var isProduct = /^[a-zA-Z ]$/.test(product);

    if(checkCategory(category)){
        if(checkProduct(isProduct)){
            return true;
        }
    }

    return false;
}

function addCategoryValidation() {
    var category = document.getElementById("category").value;

    var isCategory = /^[a-zA-Z ]{2,30}$/.test(category);
    if(!isCategory){
        document.getElementById("wrongCategory").innerHTML = "Enter a valid name";
        return false;
    }
    return true;
}

function updateProductValidation() {
    var category = document.getElementById("category").value;
    var product = document.getElementById("product").value;

    if(checkCategory(category)){
        if(checkUpdateProduct(product)){
            return true;
        }
    }

    return false;
    
}

function removeCategoryValidation() {
    var category = document.getElementById("category").value;;
    if(category=="default"){
        document.getElementById("wrongCategory").innerHTML = "Select a category";
        return false;
    }
    else{
        return true;
    }
}
function checkUpdateProduct(product) {
    if(product=="default"){
        document.getElementById("wrongProduct").innerHTML = "Select a product";
        return false;
    }

    else{
        return true;
    }
}
function checkCategory(str){
    if(str=="default"){
        document.getElementById("wrongCategory").innerHTML = "Select a category";
        return false;
    }

    else{
        return true;
    }
}

function  checkProduct(isProduct) {
    if(!isProduct){
        document.getElementById("wrongProduct").innerHTML = "Enter a valid name";
        return false;
    }

    else{
        return true;
    }
}
