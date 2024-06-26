const product =[
    {
        image: 'IKAN_MUTIARA_1.webp',
        title: 'Ikan Mutiara',
        price: 25.000
    },
]

const categories = [...new Set(product.map((item)=>
    {return item}))];

    function delElement(a){
        categories.splice(a, 1);
        displaycart();
    }

function displaycart(c){
    let j=0, total=0;
    document.getElementById("itemA").innerHTML = categories.length + " Items";
    document.getElementById("itemB").innerHTML = categories.length + " Items";
    if(categories.length==0){
        document.getElementById("root").innerHTML="Your cart is empty";

        document.getElementById("totalA").innerHTML = "Rp 000";
        document.getElementById("totalB").innerHTML = "Rp 000";
    }
    else{
        document.getElementById("root").innerHTML = categories.map((items)=>{
            let {image, title, price} = items;
            total = total+price;
            document.getElementById("totalA").innerHTML = "Rp "+ total +".000"

            return(
                `<tr>
                    <td width="150"><div class="img-box"><img class="img" src=${image}></div></td>
                    <td width="360"><p style='font-size:15px;'>${title}</p></td>
                    <td width="150"><h2 style='font-size:15px; color:red; '>Rp ${price}.000</h2></td>
                    <td width="70">`+"<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></td>"+
                `</tr>`
            );
        }).join('');
    }
}
displaycart();