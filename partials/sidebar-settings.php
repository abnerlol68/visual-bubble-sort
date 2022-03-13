<div class="stg" id="stg">
  <div class="stg-top">
    <span>Settings</span>
    <i class="fa-solid fa-xmark" id="stgClose"></i>
  </div>

  <div class="stg-arr">
    <label for="arrTwoSort">Array to sort</label>
    <div>
      <input 
        id="arrTwoSort" 
        type="text" 
        name="arrTwoSort" 
        placeholder="1,7,4,9,20 - Min Length: 2"
        pattern="[0-9,]+"
      >
    </div>
  </div>

  <div class="stg-mls">
    <label for="timeTwoSort">Array to sort</label>
    <div>
      <input id="timeTwoSort" type="number" name="timeTwoSort" placeholder="Milliseconds">
    </div>
  </div>
  
  <div class="stg-save">
    <button id="saveSettings">Save</button>
  </div>
  <div class="stg-status">
    <p id="stgStatus"></p>
  </div>
</div>
