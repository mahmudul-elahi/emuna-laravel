let totalSlots = 0;
let totalLevels = 0;
let slotsPerRow = [];
let rowTypes = [];

function changeTotalSlots(amount) {
    totalSlots += amount;
    if (totalSlots < 0) totalSlots = 0;
    document.getElementById('totalSlots').textContent = totalSlots;

    adjustSlotRows();
}

function changeTotalLevels(amount) {
    totalLevels += amount;
    if (totalLevels < 0) totalLevels = 0;
    document.getElementById('totalLevels').textContent = totalLevels;

    adjustSlotRows();
}

function adjustSlotRows() {
    const slotList = document.getElementById('slotList');
    slotList.innerHTML = '';
    if (totalLevels === 0) {
        return;
    }

    const slotsPerLevel = Math.floor(totalSlots / totalLevels);
    const extraSlots = totalSlots % totalLevels;

    slotsPerRow = new Array(totalLevels).fill(slotsPerLevel);
    rowTypes = new Array(totalLevels).fill(false);

    for (let i = 0; i < extraSlots; i++) {
        slotsPerRow[i]++;
    }

    for (let i = 0; i < totalLevels; i++) {
        const row = document.createElement('tr');
        row.innerHTML = `
                    <td class="align-middle">
                       <div class="btn-group">
                            <button type="button" class="btn btn-primary"
                                onclick="changeRowSlot(${i}, 1)">+</button>

                            <div class="step-counter">${slotsPerRow[i]}</div>
                            <button type="button" class="btn btn-primary"
                                onclick="changeRowSlot(${i}, -1)">-</button>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="doubleSwitch${i}" onchange="toggleRowType(${i})">
                            <label class="form-check-label" for="doubleSwitch${i}">Double Row</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="slot-container" id="slotContainer${i}">
                            ${generateSlotBlocks(i)}
                        </div>
                    </td>
                `;
        slotList.appendChild(row);
    }
}

function changeRowSlot(rowIndex, amount) {
    if (slotsPerRow[rowIndex] + amount > 30) {
        alert('Maximum 8 slots per row!');
        return;
    }

    slotsPerRow[rowIndex] += amount;
    if (slotsPerRow[rowIndex] < 0) slotsPerRow[rowIndex] = 0;

    totalSlots += amount;
    if (totalSlots < 0) totalSlots = 0;

    document.getElementById('totalSlots').textContent = totalSlots;
    document.getElementById(`slotContainer${rowIndex}`).innerHTML = generateSlotBlocks(rowIndex);

    const productCell = document.querySelector(`#slotList tr:nth-child(${rowIndex + 1}) td:first-child`);
    productCell.innerHTML = ` <div class="btn-group">
                            <button type="button" class="btn btn-primary"
                                onclick="changeRowSlot(${rowIndex}, 1)">+</button>

                            <div class="step-counter">${slotsPerRow[rowIndex]}</div>
                            <button type="button" class="btn btn-primary"
                                onclick="changeRowSlot(${rowIndex}, -1)">-</button>
                        </div>`;
}

function toggleRowType(rowIndex) {
    rowTypes[rowIndex] = !rowTypes[rowIndex];

    document.getElementById(`slotContainer${rowIndex}`).innerHTML = generateSlotBlocks(rowIndex);
}

function generateSlotBlocks(rowIndex) {
    let slotBlocks = '';
    const rowLetter = String.fromCharCode(65 + rowIndex);

    const totalSlotsInRow = slotsPerRow[rowIndex];

    const isDouble = rowTypes[rowIndex];

    if (isDouble) {
        for (let i = 0; i < totalSlotsInRow; i++) {
            if (i % 2 === 0 && (i + 1) < totalSlotsInRow) {
                slotBlocks += `
                            <div class="slot-block">
                                ${rowLetter}${i + 1}&${rowLetter}${i + 2}
                            </div>`;
                i++;
            } else {

                slotBlocks += `<div class="slot-block">${rowLetter}${i + 1}</div>`;
            }
        }
    } else {

        for (let i = 0; i < totalSlotsInRow; i++) {
            slotBlocks += `<div class="slot-block">${rowLetter}${i + 1}</div>`;
        }
    }

    return slotBlocks;
}
