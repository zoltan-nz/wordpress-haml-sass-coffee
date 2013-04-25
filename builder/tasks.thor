class Run < Thor
  desc "build", "run middleman build"
  def build
    `middleman build`
  end
 
  desc "watch", "Start watchr to convert haml, sass and coffee source as it is modified"
  def watch
    invoke :build
    system "watchr converters.watchr"
  end
end