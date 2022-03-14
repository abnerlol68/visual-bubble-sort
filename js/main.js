const barsLayout = document.getElementById('barsLayout');

let arrTwoSort = [5,3,5,2];
let timeTwoSort = 500;

/**
 * Insertion of divs with height and quantity 
 * regarding the information of an array.
 * @param {Array} arr 
 */
const renderBarsLayout = (arr) => {
  barsLayout.innerHTML = arr.map(e => `
    <div id=${e} style="height: ${e}%"></div>
  `).join('');
}

renderBarsLayout(arrTwoSort);

const btnSettings = document.getElementById('sdbSettings');
const btnCloseSettings = document.getElementById('stgClose');

const btnSaveSettings = document.getElementById('saveSettings');
const txtArray = document.getElementById('arrTwoSort');
const txtTime = document.getElementById('timeTwoSort');
const txtStatus = document.getElementById('stgStatus');

let danger = '#ff4136';
let success = '#01ff01';

/**
 * Settings menu visible
 */
btnSettings.onclick = () => {
  document.getElementById('stg').classList.toggle('active');
}
/**
 * Settings menu hidden
 */
btnCloseSettings.onclick = () => {
  document.getElementById('stg').classList.remove('active');
  txtStatus.innerText = '';
  txtStatus.style.color = success;
}

/**
 * Configuration values for sorting
 */
btnSaveSettings.onclick = () => {
  arrTwoSort = txtArray.value.split(',').map(e => parseInt(e));
  timeTwoSort = parseInt(txtTime.value);

  if (arrTwoSort.includes(NaN) || timeTwoSort == NaN) {
    arrTwoSort = [5,3,5,2];
    timeTwoSort = 500;
    txtStatus.innerText = "The sort configuration is invalid.";
    txtStatus.style.color =  danger;
    return;
  }

  txtStatus.innerText = "Saved settings.";
  renderBarsLayout(arrTwoSort);
}
