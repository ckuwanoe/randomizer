class List < ActiveRecord::Base
  # attr_accessible :title, :body

  def randomize
    return self.subjects.sort_by { rand }
  end
end
