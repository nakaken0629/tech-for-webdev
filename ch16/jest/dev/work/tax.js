let calc_tax = (price, isExempted, isReduced, isTakenOut) => {
    if (isExempted) {
        return price;
    } else if (isReduced && isTakenOut) {
        return price * 1.08;
    } else {
        return price * 1.1;
    }
};
module.exports = calc_tax;
