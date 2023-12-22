def calc_tax(price, is_exempted, is_reduced, is_taken_out):
    if is_exempted:
        return price
    elif is_reduced and is_taken_out:
        return price * 1.08
    else:
        return price * 1.1
