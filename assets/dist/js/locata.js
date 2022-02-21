const button = document.querySelector("button");
const info = document.querySelector(".info")

function getLocation(){
    if (window.navigator.geolocation){
        button.innerHTML = 'Make Locateme Know Where U Dey <i class="fa fa-warning"></i>';
        button.style.background = "#212529";
        button.style.color = "#ffffff";
        navigator.geolocation.getCurrentPosition(async function (position){
            button.innerHTML = `I dey try check where u dey, abeg wait... <i class="fa fa-search-plus"></i>`;
            button.style.background = "yellow"
             button.style.color = "#000000";
            let lat = position.coords.latitude;
            let long = position.coords.longitude;

await fetch(`https://api.opencagedata.com/geocode/v1/json?q=${lat}+${long}&key=6963e4d99b1f4a62bc3d927ba8ad2d83`)
    .then((response) => response.json())
    .then((data) => {
    let locationDetails = data.results[0].components;
    info.innerHTML =`
    <div>
    <p>See Dey Place I Dey Now Now For Online</p>
    <ul>
        <li><span>Continent:</span> ${locationDetails.continent}</li>
        <li><span>Country:</span> ${locationDetails.country}</li>
        <li><span>Country Code:</span> ${locationDetails.country_code}</li>
        <li><span>Place:</span> ${locationDetails._category}</li>
        <li><span>Type:</span> ${locationDetails._type}</li>
        <li><span>House Number:</span> ${locationDetails.house_number}</li>
        <li><span>Road:</span> ${locationDetails.road}</li>
        <li><span>City:</span> ${locationDetails.city}</li>
        <li><span>State:</span> ${locationDetails.state}</li>
        <li><span>State Code:</span> ${locationDetails.state_code}</li>
        <li><span>District:</span> ${locationDetails.state_district}</li>
        <li><span>Local Government:</span> ${locationDetails.county}</li>
        <li><span>Village:</span> ${locationDetails.village}</li>
        <li><span>Postal Code:</span> ${locationDetails.postcode}</li>
    </ul>
    <p>Na Here I Dey Now</p>
    </div>`;
    info.style.visibility = "unset"
    button.style.color = "#ffffff";
    button.style.background = "#212529"
    button.innerHTML =`See Where I Dey Again <i class="fa fa-refresh"></i>`;
}).catch(()=>{
    button.innerHTML = '<p> E get wetin no correct, abeg check weda ur Data dey ON</p>'
    });
},
 function (error){
     if(error.code == 1){
         button.innerText = "Dey User No Allow Me Make I See Where U Dey";
     }else if (error.code == 2){
         button.innerText = "I No See This Place Where U Dey"
     }else if(error.code == 3){
         button.innerText = "Time Don Pass I No Fit Give U Result"
             }
        })
    }
}
function reloadPage(){
    location.reload()
}
