const button = document.querySelector("button");
const info = document.querySelector(".info")

function getLocation(){
    if (window.navigator.geolocation){
        button.innerHTML = 'Allow LocateMe To Detect Your Location <i class="fa fa-warning"></i>';
        button.style.background = "#212529";
        button.style.color = "#ffffff";
        navigator.geolocation.getCurrentPosition(async function (position){
            button.innerHTML = `Detecting Where You Are Right Now... <i class="fa fa-search-plus"></i>`;
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
    <p>Your Live Location is</p>
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
    <p>This Is Where You Are</p>
    </div>`;
    info.style.visibility = "unset"
    button.style.color = "#ffffff";
    button.style.background = "#212529"
    button.innerHTML =`Get Location Again <i class="fa fa-refresh"></i>`;
}).catch(()=>{
    button.innerHTML = '<p> Something Went Wrong</p>'
    });
},
 function (error){
     if(error.code == 1){
         button.innerText = "User Has Blocked The Permission";
     }else if (error.code == 2){
         button.innerText = "Position Not Found"
     }else if(error.code == 3){
         button.innerText = "TimeOut No Result Found"
             }
        })
    }
}
function reloadPage(){
    location.reload()
}
