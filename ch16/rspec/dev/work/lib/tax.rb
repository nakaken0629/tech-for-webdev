class Tax
  def calc_tax(price, exempted, reduced, taken_out)
    if exempted
      price
    elsif reduced && taken_out
      (price * 1.08).to_i
    else
      (price * 1.1).to_i
    end
  end
end
